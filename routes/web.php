<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;

Route::get('/', function () {
    return view('welcome');
});

// untuk memanggil route PhotoController
Route::resource('Photos', PhotoController::class)-> only
(['index', 'show']);
Route::resource('Photos', PhotoController::class)-> except
(['create', 'store', 'update', 'delete']);

//untuk memanggil file views/blog/hello.blade.php
Route::get('/greeting', [WelcomeController::class, 'greeting']);

//untuk memanggil route controllers
Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/welcome', [PageController::class,'index']);
Route::get('/about', [PageController::class,'about']);
Route::get('/article/{id}', [PageController::class, 'article']);





