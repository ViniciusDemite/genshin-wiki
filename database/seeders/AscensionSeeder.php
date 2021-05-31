<?php

namespace Database\Seeders;

use App\Models\Ascension;
use Illuminate\Database\Seeder;

class AscensionSeeder extends Seeder
{
    public function run(): void
    {
        $ascensions = [
            [
                'level' => 0,
                'min_level' => 1,
                'max_level' => 20
            ],
            [
                'level' => 1,
                'min_level' => 20,
                'max_level' => 40
            ],
            [
                'level' => 2,
                'min_level' => 40,
                'max_level' => 50
            ],
            [
                'level' => 3,
                'min_level' => 50,
                'max_level' => 60
            ],
            [
                'level' => 4,
                'min_level' => 60,
                'max_level' => 70
            ],
            [
                'level' => 5,
                'min_level' => 70,
                'max_level' => 80
            ],
            [
                'level' => 6,
                'min_level' => 80,
                'max_level' => 90
            ],
        ];

        Ascension::insert($ascensions);
    }
}
