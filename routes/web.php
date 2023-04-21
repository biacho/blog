<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController as PostController;
use App\Http\Controllers\MainController as MainController;
use App\Http\Controllers\HomeController as HomeController;

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


Auth::routes();

Route::get('/', [MainController::class, 'show'])->name('main');
Route::get('/newPost', [MainController::class, 'newPostView']);
Route::get('/edit/{id}', [MainController::class, 'editPostView']);

// Route::get('/posts', [PostController::class, 'get']);
Route::post('/create', [PostController::class, 'create']);
Route::post('/update', [PostController::class, 'update']);
Route::post('/delete', [PostController::class, 'delete']);
