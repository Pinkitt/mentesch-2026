<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/allergens', function () {
    return view('allergens');
});

Route::get('/restaurantsearch', function () {
    return view('restaurantsearch');
});