<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});

// Route::get('/about', function () {
//     return Inertia::render('About', ['user' => 'Marx']);
// });

Route::inertia('about', 'About', ['user' => 'Karl']);

