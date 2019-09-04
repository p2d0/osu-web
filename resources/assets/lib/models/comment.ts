/**
 *    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

import { CommentJSON } from 'interfaces/comment-json';
import { orderBy } from 'lodash';

export type CommentSort = 'new' | 'old' | 'top';

export class Comment {
  id: number;

  constructor(json: CommentJSON) {
    this.id = json.id;
  }

  static fromJSON(json: CommentJSON): Comment {
    const obj = Object.create(Comment.prototype);

    return Object.assign(obj, json);
  }

  static sort(comments: Comment[], sort: CommentSort) {
    switch (sort) {
      case 'old':
        return orderBy(comments, 'created_at', 'asc');
      case 'top':
        return orderBy(comments, 'votes_count', 'desc');
      default:
        return orderBy(comments, 'created_at', 'desc');
    }
  }
}
