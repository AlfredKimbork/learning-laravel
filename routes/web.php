<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coaches', function () {
    $coaches = [
    ["name" => "John", "experience" => 14, "id" => 1],
    ["name" => "Damon", "experience" => 8, "id" => 2]
    ];

    return view('coaches.index', ["greeting" => "howdy", "coaches" => $coaches]);
});

Route::get('/coaches/create', function () {
    return view('coaches.create');
});

Route::get('/coaches/{id}', function ($id) {
    return view('coaches.show', ["id" => $id]);
});
