<?php

use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\Route;

/*
    GET - Request a resource
    POST - Create a new resource
    PUT - Update a resource 
    PATCH - Modify a resource
    DELETE - Delete a resource
    OPTIONS - ask the server which verbs are allowed
*/


Route::resource('/blog', PostsController::class);

// Route::prefix('/blog')->group(function () {
//     Route::get('/create', [PostsController::class, 'create'])->name('blog.create');
//     Route::get('/', [PostsController::class, 'index'])->name('blog.index');
//     Route::get('/edit/{id}', [PostsController::class, 'edit'])->name('edit');
//     Route::post('/', [PostsController::class, 'store'])->name('blog.store');
//     Route::patch('/{id}', [PostsController::class, 'update'])->name('blog.update');
//     Route::get('/{id}', [PostsController::class, 'destroy'])->name('blog.destroy');
//     Route::get('/{id}', [PostsController::class, 'show'])->name('blog.show');
// });

// Route::resource('blog', PostsController::class);

//Route for inboke method
Route::get('/', HomeController::class);

// Multiple HTTP Verbs
// Route::match(['GET', 'POST'], '/blog', [PostsController::class, 'index']);
// Route::any('/blog', [PostsController::class, 'index']);


//Return view
// Route::view('/blog', 'blog.index', ['name' => 'code wih dary']);



// Route for invoke method

//Fallback Route
Route::fallback(FallbackController::class);