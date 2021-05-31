<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    public function run(): void
    {
        $statuses = [
            [
                'name' => 'Released',
                'slug' => 'released'
            ],
            [
                'name' => 'Not Released',
                'slug' => 'not-released'
            ],
            [
                'name' => 'Rumor',
                'slug' => 'rumor'
            ]
        ];

        Status::insert($statuses);
    }
}
