<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Character extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function rarity(): HasOne
    {
        return $this->hasOne(Rarity::class);
    }

    public function status(): HasOne
    {
        return $this->hasOne(Status::class);
    }

    public function element(): HasOne
    {
        return $this->hasOne(Element::class);
    }

    public function region(): HasOne
    {
        return $this->hasOne(Region::class);
    }

    public function weaponType(): HasOne
    {
        return $this->hasOne(WeaponType::class);
    }

    public function role(): HasOne
    {
        return $this->hasOne(Role::class);
    }

    public function gender(): HasOne
    {
        return $this->hasOne(Gender::class);
    }
}
