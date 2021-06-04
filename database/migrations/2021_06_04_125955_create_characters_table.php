<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    public function up(): void
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('slug', 150)->unique();
            $table->text('description')->nullable();
            $table->date('birthday');
            $table->boolean('is_archon')->default(false);
            $table->foreignId('rarity_id')->constrained('rarities');
            $table->foreignId('status_id')->constrained('statuses');
            $table->foreignId('element')->constrained('elements');
            $table->foreignId('region_id')->constrained('regions');
            $table->foreignId('weapon_type_id')->constrained('weapon_types');
            $table->foreignId('role_id')->constrained('roles');
            $table->foreignId('gender_id')->constrained('genders');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
}
