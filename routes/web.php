<?php

use App\Http\Controllers\BlogPostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [BlogPostController::class, 'index'])->name('blog.index');
Route::get('/blog/create', [BlogPostController::class, 'create'])->name('blog.create');
Route::post('/blog', [BlogPostController::class, 'store'])->name('blog.store');
Route::get('/blog/{id}', [BlogPostController::class, 'show'])->name('blog.show');
Route::post('/blog/{id}/comment', [BlogPostController::class, 'storeComment'])->name('blog.comment.store');
