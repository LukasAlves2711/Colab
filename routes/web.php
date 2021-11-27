<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/blocks', [BlockController::class, 'index']
)->middleware(['auth'])->name('blocks');

Route::get('/posts/index', [PostsController::class, 'index']
)->middleware(['auth'])->name('posts');




require __DIR__ . '/auth.php';


Route::get('/posts', [PostsController::class, 'index']);

Route::post('/posts', [PostsController::class, 'store']);

Route::get('/posts/create', [PostsController::class, 'create']);

Route::get('/posts/{post}/edit', [PostsController::class, 'edit']);

Route::put('/posts/{post}', [PostsController::class, 'update']);

Route::delete('/posts/{post}', [PostsController::class, 'destroy']);



