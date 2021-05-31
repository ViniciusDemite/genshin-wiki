<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    public function run(): void
    {
        $genders = [
            [
                'name' => 'Female',
                'slug' => 'female',
                'char' => 'f'
            ],
            [
                'name' => 'Male',
                'slug' => 'male',
                'char' => 'm'
            ]
        ];

        Gender::insert($genders);
    }
}
