<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassivesTable extends Migration
{
    public function up(): void
    {
        Schema::create('passives', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('slug', 150)->unique();
            $table->text('description')->nullable();
            $table->foreignId('ascention_id')->constrained('ascensions');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('passives');
    }
}
