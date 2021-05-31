<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            [
                'name' => 'Main DPS',
                'slug' => 'main-dps'
            ],
            [
                'name' => 'Sub DPS',
                'slug' => 'sub-dps'
            ],
            [
                'name' => 'Utility',
                'slug' => 'utility'
            ]
        ];

        Role::insert($roles);
    }
}
