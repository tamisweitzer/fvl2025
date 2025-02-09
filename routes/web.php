<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/face1', function () {
    return view('face1');
});

Route::get('/face2', function () {
    return view('face2');
});
