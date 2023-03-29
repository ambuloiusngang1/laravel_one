<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return View('contact');
// });

//HOW EVER IF YOU'RE JUST ROUTING TO A VIEW USE SHORTER METHOD BELOW INSTEAD OF LONG ABOVE W CALL BACK FXN 

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

Route::get('/posts/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show');
