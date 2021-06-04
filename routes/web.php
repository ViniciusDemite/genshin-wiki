<?php

use App\Models\Character;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $character = Character::with(['element', 'gender', 'region', 'rarity', 'status', 'weapon_type', 'role'])->first()->dd();

    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
