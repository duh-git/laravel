<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
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


// Main
Route::get('/', function () {
    return view('main/main');
});
Route::get('/contact', function () {
    $data = [
        'city' => 'Moscow',
        'street' => 'Bolshaya Semenovskaya',
        'house' => '38',
    ];

    return view('main/contact', ['data' => $data]);
});
Route::get('/about', function () {
    return view('main/about');
});

// Gallery
Route::get('/gallery', [MainController::class, 'index']);
Route::get('/gallery/{img}&&{desc}', [MainController::class, 'show']);


// Auth
Route::get('/auth/signup', [AuthController::class, 'signup']);
Route::post('/auth/register', [AuthController::class, 'register']);


// Articles
Route::resource('articles', ArticleController::class);