<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\PostController;
use App\HTTP\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});


Route::post('/register', [UserController::class, 'register']);

Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

// blog post route

Route::post('/create-post', [PostController::class, 'createPost']);