<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAscensionsTable extends Migration
{
    public function up(): void
    {
        Schema::create('ascensions', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('level')->unsigned()->unique();
            $table->tinyInteger('min_level')->unsigned();
            $table->tinyInteger('max_level')->unsigned();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ascensions');
    }
}
