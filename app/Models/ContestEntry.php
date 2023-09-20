<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

/**
 * @property-read \Illuminate\Database\Eloquent\Collection $categoryVotes ContestJudgeCategoryVote
 * @property-read Contest $contest
 * @property int $contest_id
 * @property \Carbon\Carbon|null $created_at
 * @property string|null $entry_url
 * @property string|null $thumbnail_url
 * @property int $id
 * @property-read \Illuminate\Database\Eloquent\Collection $judgeVotes ContestJudgeVote
 * @property string $masked_name
 * @property string $name
 * @property \Carbon\Carbon|null $updated_at
 * @property-read User $user
 * @property int|null $user_id
 * @property-read \Illuminate\Database\Eloquent\Collection $votes ContestVote
 */
class ContestEntry extends Model
{
    public function categoryVotes(): HasManyThrough
    {
        return $this->hasManyThrough(ContestJudgeCategoryVote::class, ContestJudgeVote::class);
    }

    public function contest()
    {
        return $this->belongsTo(Contest::class);
    }

    public function judgeVotes(): HasMany
    {
        return $this->hasMany(ContestJudgeVote::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function votes()
    {
        return $this->hasMany(ContestVote::class);
    }

    public function thumbnail(): ?string
    {
        if (!$this->contest->hasThumbnails()) {
            return null;
        }

        return presence($this->thumbnail_url) ?? $this->entry_url;
    }
}
