<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Talent extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function type(): HasOne
    {
        return $this->hasOne(TalentType::class);
    }
}
