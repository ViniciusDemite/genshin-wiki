<?php

namespace Database\Seeders;

use App\Models\SkillType;
use Illuminate\Database\Seeder;

class SkillTypeSeeder extends Seeder
{
    public function run(): void
    {
        $skillTypes = [
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
        ];

        SkillType::insert($skillTypes);
    }
}
