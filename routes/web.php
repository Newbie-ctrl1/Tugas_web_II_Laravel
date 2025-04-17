<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/welcome', [PageController::class,'index']);
Route::get('/about', [PageController::class,'about']);
Route::get('/article/{id}', [PageController::class, 'article']);
Route::resource('Photos', PhotoController::class);




