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
                'Sword',
                'sword'
            ],
            [
                'Polearm',
                'polearm'
            ],
            [
                'Claymore',
                'claymore'
            ],
            [
                'Catalyst',
                'catalyst'
            ],
            [
                'Bow',
                'bow'
            ],
        ];

        WeaponType::insert($weaponTypes);
    }
}
