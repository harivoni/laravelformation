<?php

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

Route::get('/', [PostController::class, 'index'])->name('welcome');
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route::post('/posts/create', [PostController::class, 'store'])->name('post.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('post.show');
Route::get('/contact', [PostController::class, 'contact'])->name('contact');
Route::get('/post/delete/{id}', [PostController::class, 'delete'])->name('post.delete');

/* Route::get('/posts', function () {
    return response()->json([
        'title' => 'mon premier titre',
        'description' => 'mon premier description'
    ]);
});

Route::get('/articles', function () {
    return view('articles');
}); */
