<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Element;
use App\Models\Gender;
use App\Models\Rarity;
use App\Models\Region;
use App\Models\Role;
use App\Models\Status;
use App\Models\WeaponType;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    public function run(): void
    {
        Character::create([
            'name' => 'Albedo',
            'slug' => 'albedo',
            'birthday' => '2020-09-13',
            'description' => '',
            'rarity_id' => Rarity::where('level', 5)->first()->id,
            'status_id' => Status::first()->id,
            'element' => Element::where('slug', 'geo')->first()->id,
            'region_id' => Region::where('slug', 'liyue')->first()->id,
            'weapon_type_id' => WeaponType::where('slug', 'sword')->first()->id,
            'role_id' => Role::where('slug', 'sub-dps')->first()->id,
            'gender_id' => Gender::where('char', 'm')->first()->id
        ]);
    }
}
