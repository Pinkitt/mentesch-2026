<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/rolunk', function () {
    return view('about');
});

Route::get('/allergenek', function () {
    return view('allergens');
});

Route::get('/etteremkereso', function () {
    return view('restaurantsearch');
});