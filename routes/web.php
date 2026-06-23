<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoachController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('guest')->controller(AuthController::class)->group(function() {
    Route::get('/register', 'showRegister')->name('show.register');
    Route::get('/login', 'showLogin')->name('show.login');
    Route::post('/register', 'register')->name('register');
    Route::post('/login', 'login')->name('login');
});

Route::middleware('auth')->controller(CoachController::class)->group(function() {
    Route::get('/coaches', 'index')->name('coaches.index');
    Route::get('/coaches/create', 'create')->name('coaches.create');
    Route::get('/coaches/{coach}', 'show')->name('coaches.show');
    Route::post('/coaches', 'store')->name('coaches.store');
    Route::delete('/coaches/{coach}', 'destroy')->name('coaches.destroy');
});