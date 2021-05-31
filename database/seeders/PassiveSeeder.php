<?php

namespace Database\Seeders;

use App\Models\Ascension;
use App\Models\Passive;
use Illuminate\Database\Seeder;

class PassiveSeeder extends Seeder
{
    public function run()
    {
        $ascentionId = Ascension::where('level', 1)->first()->id;

        Passive::create([
            'name' => 'Teste',
            'slug' => 'teste',
            'description' => '',
            'ascention_id' => $ascentionId
        ]);
    }
}
