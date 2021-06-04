<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaritiesTable extends Migration
{
    public function up(): void
    {
        Schema::create('rarities', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('level');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rarities');
    }
}
