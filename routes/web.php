<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TaskController;

Route::resource('tasks', TaskController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/posts', [PostController::class, 'index']);

Route::resource('posts', PostController::class);




