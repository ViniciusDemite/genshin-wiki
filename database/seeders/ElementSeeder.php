<?php

namespace Database\Seeders;

use App\Models\Element;
use Illuminate\Database\Seeder;

class ElementSeeder extends Seeder
{
    public function run(): void
    {
        $elements = [
            [
                'name' => 'Electro',
                'slug' => 'electro'
            ],
            [
                'name' => 'Geo',
                'slug' => 'geo'
            ],
            [
                'name' => 'Pyro',
                'slug' => 'pyro'
            ],
            [
                'name' => 'Hydro',
                'slug' => 'hydro'
            ],
            [
                'name' => 'Cryo',
                'slug' => 'cryo'
            ],
            [
                'name' => 'Dendro',
                'slug' => 'dendro'
            ],
            [
                'name' => 'Anemo',
                'slug' => 'anemo'
            ]
        ];

        Element::insert($elements);
    }
}
