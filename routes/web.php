<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
  return view('home', [
    'title' => 'Home',
    'active' => 'home'
  ]);
});

Route::get('/about', function () {
  return view('about', [
    'title' => 'About',
    'active' => 'about',
    'name' => 'Alivan',
    'email' => 'alfanalivan@gmail.com',
    'image' => 'alivan.jpg',
  ]);
});

Route::get('/posts', [PostController::class, 'index']);

//single post page route
// Route::get('/posts/{slug}', [PostController::class, 'show']);

// single post route model binding
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->middleware(['guest'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware(['guest'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
