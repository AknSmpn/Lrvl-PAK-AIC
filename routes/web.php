<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NewsController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('news',[NewsController::class,"index"]);
Route::get('home',[HomeController::class,"index"]);