<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoachController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register');
Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');

Route::get('/coaches', [CoachController::class, 'index'])->name('coaches.index');
Route::get('/coaches/create', [CoachController::class, 'create'])->name('coaches.create');
Route::get('/coaches/{coach}', [CoachController::class, 'show'])->name('coaches.show');
Route::post('/coaches', [CoachController::class, 'store'])->name('coaches.store');
Route::delete('/coaches/{coach}', [CoachController::class, 'destroy'])->name('coaches.destroy');