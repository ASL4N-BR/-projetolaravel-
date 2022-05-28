<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route:: middleware(['auth'])->group(function() {
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::get('/posts', [PostController::class,'index'])->name('posts.index');
    Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
    Route::delete('/post{id}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/post/edit/{id}', [PostController::class, 'update'])->name('posts.update');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';




