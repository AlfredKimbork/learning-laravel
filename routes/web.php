<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coaches', function () {
    $coaches = [
    ["name" => "John", "experies" => 14, "id" => 1],
    ["name" => "Damon", "experies" => 12, "id" => 1]
    ];

    return view('coaches.index', ["greeting" => "howdy", "coaches" => $coaches]);
});

Route::get('/coaches/{id}', function ($id) {
    return view('coaches/.show', ["id" => $id]);
});
