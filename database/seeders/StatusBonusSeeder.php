<?php

namespace Database\Seeders;

use App\Models\StatusBonus;
use Illuminate\Database\Seeder;

class StatusBonusSeeder extends Seeder
{
    public function run(): void
    {
        $statusBonuses = [
            [
                'name' => 'Pysical Damage',
                'slug' => 'pysical-damage'
            ],
            [
                'name' => 'Cryo Damage',
                'slug' => 'cryo-damage'
            ],
            [
                'name' => 'Pyro Damage',
                'slug' => 'pyro-damage'
            ],
            [
                'name' => 'Dendro Damage',
                'slug' => 'dendro-damage'
            ],
            [
                'name' => 'Hydro Damage',
                'slug' => 'hydro-damage'
            ],
            [
                'name' => 'Anemo Damage',
                'slug' => 'anemo-damage'
            ],
            [
                'name' => 'Electro Damage',
                'slug' => 'electro-damage'
            ],
            [
                'name' => 'Critical Damage',
                'slug' => 'critical-damage'
            ],
            [
                'name' => 'Critical Rate',
                'slug' => 'critical-rate'
            ],
            [
                'name' => 'Elemental Mestary',
                'slug' => 'elemental-mestary'
            ],
        ];

        StatusBonus::insert($statusBonuses);
    }
}
