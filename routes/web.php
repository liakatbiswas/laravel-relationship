<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\PostController;
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
 return view('welcome');
});

Route::get('/user', [PhoneController::class, 'index']); //  user with phone & phone with user
Route::get('/post', [PostController::class, 'show']); //  post with comments & comments with post
Route::get('/many', [CategoryController::class, 'show']); // many to many