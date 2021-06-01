<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            GenderSeeder::class,
            ElementSeeder::class,
            WeaponTypeSeeder::class,
            RegionSeeder::class,
            RoleSeeder::class,
            StatusSeeder::class,
            AscensionSeeder::class,
            SkillTypeSeeder::class,
            StatusBonusSeeder::class,
        ]);
    }
}
