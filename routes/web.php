<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view ('/inicio', 'home');
Route::get('/fecha', function () {
    return view ('fecha');
});

