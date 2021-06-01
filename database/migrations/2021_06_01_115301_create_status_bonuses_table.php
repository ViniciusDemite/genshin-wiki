<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusBonusesTable extends Migration
{
    public function up(): void
    {
        Schema::create('status_bonuses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('slug', 150)->unique();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('status_bonuses');
    }
}
