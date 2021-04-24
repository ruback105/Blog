<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [PagesController::class, 'index']);

Route::get('/post', [PostsController::class, 'post']);
Route::get('/profile', [ProfileController::class, 'index']);

Route::post('/store/post', [PostsController::class, 'store']);
Route::post('/store/comment', [CommentsController::class, 'store']);

Route::resource('/posts', PostsController::class);
Route::resource('/profile', ProfileController::class);
Route::resource('/admin', AdminController::class);

Auth::routes();

Route::get('/home', [
    \App\Http\Controllers\HomeController::class,
    'index',
])->name('home');
