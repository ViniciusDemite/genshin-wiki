<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    public function run(): void
    {
        $regions = [
            [
                'name' => 'Liyue',
                'slug' => 'liyue'
            ],
            [
                'name' => 'Mondstadt',
                'slug' => 'mondstadt'
            ],
            [
                'name' => 'Inazuma',
                'slug' => 'inazuma'
            ],
            [
                'name' => 'Snezhnaya',
                'slug' => 'snezhnaya'
            ],
        ];

        Region::insert($regions);
    }
}
