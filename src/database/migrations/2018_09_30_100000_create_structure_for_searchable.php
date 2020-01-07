<?php

use LaravelEnso\Migrator\app\Database\Migration;
use LaravelEnso\Permissions\App\Enums\Types;

class CreateStructureForSearchable extends Migration
{
    protected $permissions = [
        ['name' => 'core.search.index', 'description' => 'Search index', Types::Read, 'is_default' => true],
    ];
}
