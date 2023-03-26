<?php

use App\Models\Post;
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

Route::get('/posts', function () {
  return view('posts', [
    'title' => 'Posts',
    'active' => 'posts',
    'posts' => Post::all()
  ]);
});

//single post page route
Route::get('/posts/{slug}', function ($slug) {
  return view('post', [
    'title' => 'Post',
    'active' => 'posts',
    'post' => Post::find($slug)
  ]);
});
