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
                'Electro',
                'electro'
            ],
            [
                'Geo',
                'geo'
            ],
            [
                'Pyro',
                'pyro'
            ],
            [
                'Hydro',
                'hydro'
            ],
            [
                'Cryo',
                'cryo'
            ],
            [
                'Dendro',
                'dendro'
            ],
            [
                'Anemo',
                'anemo'
            ]
        ];

        Element::insert($elements);
    }
}
