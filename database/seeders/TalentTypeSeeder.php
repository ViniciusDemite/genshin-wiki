<?php

namespace Database\Seeders;

use App\Models\TalentType;
use Illuminate\Database\Seeder;

class TalentTypeSeeder extends Seeder
{
    public function run(): void
    {
        $talentTypes = [
            [
                'name' => 'Normal Atack',
                'slug' => 'normal-atack'
            ],
            [
                'name' => 'Elemental Skill',
                'slug' => 'elemental-skill'
            ],
            [
                'name' => 'Elemental Burst',
                'slug' => 'elemental-burst'
            ],
            [
                'name' => 'Alternate Sprint',
                'slug' => 'alternate-sprint'
            ],
            [
                'name' => 'Utility Passive',
                'slug' => 'utility-passive'
            ]
        ];

        TalentType::insert($talentTypes);
    }
}
