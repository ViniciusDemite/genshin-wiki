<?php

namespace Database\Seeders;

use App\Models\Rarity;
use Illuminate\Database\Seeder;

class RaritySeeder extends Seeder
{
    public function run(): void
    {
        $levels = [
            [
                'level' => 1
            ],
            [
                'level' => 2
            ],
            [
                'level' => 3
            ],
            [
                'level' => 4
            ],
            [
                'level' => 5
            ],
        ];

        Rarity::insert($levels);
    }
}
