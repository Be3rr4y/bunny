<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
   // return view('welcome');
//});

// import home controller path
// in laravel we dont use import the word use(in samall case)
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']) ->name('index');
//nickname to mean the url-> name('index')
// 