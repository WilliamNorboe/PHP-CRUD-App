<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::post('/register', function () {
    return 'thank you';
});

Route::get('/contact', function () {
    return view('contact');
});
