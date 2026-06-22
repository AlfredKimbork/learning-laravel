<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoachController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coaches', [CoachController::class, 'index']);

Route::get('/coaches/create', [CoachController::class, 'create']);

Route::get('/coaches/{id}', [CoachController::class, 'show']);
