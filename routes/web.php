<?php

use App\Http\Controllers\HomeController;
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
//     return view('home');
// });

Route::get('/', [HomeController::class, 'home'])->name('home');

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/contact', 'HomeController@contact')->name('contact');
//Route::view('/contact', 'contact')->name('contact');

Route::get('blog-post/{id}/{welcome?}', 'HomeController@blog_post')->name('blog-post');