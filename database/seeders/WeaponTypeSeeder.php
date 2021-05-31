<?php

namespace Database\Seeders;

use App\Models\WeaponType;
use Illuminate\Database\Seeder;

class WeaponTypeSeeder extends Seeder
{
    public function run(): void
    {
        $weaponTypes = [
            [
                'name' => 'Sword',
                'slug' => 'sword'
            ],
            [
                'name' => 'Polearm',
                'slug' => 'polearm'
            ],
            [
                'name' => 'Claymore',
                'slug' => 'claymore'
            ],
            [
                'name' => 'Catalyst',
                'slug' => 'catalyst'
            ],
            [
                'name' => 'Bow',
                'slug' => 'bow'
            ],
        ];

        WeaponType::insert($weaponTypes);
    }
}
