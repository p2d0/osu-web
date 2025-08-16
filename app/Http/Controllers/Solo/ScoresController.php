<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

namespace App\Http\Controllers\Solo;

use App\Http\Controllers\Controller as BaseController;
use App\Libraries\ClientCheck;
use App\Models\ScoreToken;
use App\Models\Solo\Score;
use App\Transformers\ScoreTransformer;
use App\Models\Beatmap;
use DB;

class ScoresController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store($beatmapId, $tokenId)
    {
        $request = \Request::instance();
        $clientTokenData = ClientCheck::parseToken($request);
        $params = get_params($request->all(), null, [
            'checksum:string'
        ]);
        if($beatmapId <= 0)
            $beatmapId = Beatmap::where('checksum', $params['checksum'])->first()->beatmap_id;
        $score = DB::transaction(function () use ($beatmapId, $request, $tokenId) {
            $user = auth()->user();
            $scoreToken = ScoreToken::where([
                'beatmap_id' => $beatmapId,
                'user_id' => $user->getKey(),
            ])->lockForUpdate()->findOrFail($tokenId);

            $beatmapsetApprovedAt = $scoreToken->beatmap?->beatmapset?->approved_date;
            if ($beatmapsetApprovedAt !== null && $scoreToken->created_at->isBefore($beatmapsetApprovedAt)) {
                abort(422, 'beatmapset state has been updated');
            }

            // return existing score otherwise (assuming duplicated submission)
            if ($scoreToken->score_id === null) {
                $params = Score::extractParams($request->all(), $scoreToken);
                $score = Score::createFromJsonOrExplode($params);
                $scoreToken->fill(['score_id' => $score->getKey()])->saveOrExplode();
            } else {
                // assume score exists and is valid
                $score = $scoreToken->score;
            }

            return $score;
        });

        if ($score->wasRecentlyCreated) {
            ClientCheck::queueToken($clientTokenData, $score->getKey());
            $score->queueForProcessing();
        }

        return json_item($score, new ScoreTransformer(false));
    }
}
