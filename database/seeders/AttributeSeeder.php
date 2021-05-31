<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    public function run(): void
    {
        $teste = json_encode([
            'Attack' => 200,
            'Defense' => 400,
            'Critical Rate' => 50
        ]);

        Attribute::create([
            'properties' => $teste
        ]);
    }
}
