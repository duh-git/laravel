<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});


// My Routes

Route::get('/', function () {
    return view('main/main');
});

Route::get('/contact', function () {
    return view('main/contact');
});

Route::get('/about', function () {
    return view('main/about');
});

