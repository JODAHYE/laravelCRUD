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

Route::get('/', [PostController::class, 'list'])->name('post.list');
Route::get('/show/{id}', [PostController::class, 'showView'])->name('post.show');

Route::get('/create', [PostController::class, 'createView'])->name('post.createView');
Route::post('/create', [PostController::class, 'createPost'])->name('post.create');

Route::get('/update/{id}', [PostController::class, 'updateView'])->name('post.updateView');
Route::put('/update/{id}', [PostController::class, 'updatePost'])->name('post.update');

Route::delete('/delete/{id}', [PostController::class, 'deletePost'])->name('post.delete');
