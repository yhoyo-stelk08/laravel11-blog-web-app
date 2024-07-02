<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::resource('posts', PostsController::class)->only(['index','show']);

Route::get('/', function () {
    return view('welcome');
})->name('home');
