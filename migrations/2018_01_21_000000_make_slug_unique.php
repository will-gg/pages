<?php

/*
 * This file is part of fof/pages.
 *
 * Copyright (c) 2019 FriendsOfFlarum.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;

return [
    'up' => function (Builder $schema) {
        $schema->table('pages', function (Blueprint $table) {
            $table->unique('slug');
        });
    },
    'down' => function (Builder $schema) {
        $schema->table('pages', function (Blueprint $table) {
            $table->dropUnique('slug');
        });
    },
];
