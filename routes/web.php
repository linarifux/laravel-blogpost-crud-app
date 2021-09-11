<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index']);

Route::get('/{post}/edit', [PostController::class, 'editView']);

Route::put('/posts/{post}', [PostController::class, 'update']);

Route::get('/posts/create', [PostController::class, 'showPostField']);

Route::post('/posts', [PostController::class, 'createPost']);

Route::delete('/posts/{post}', [PostController::class, 'destroyPost']);