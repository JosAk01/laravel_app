<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FallbackController;

/*
 GET - Request a resource
 POST - Create a new resource
 PUT - Update a resource
 PATCH - Modify a resource
 DELETE - Delete a resource
 OPTIONS - Ask the server which verbs are allowed
*/

//GET


//POST

//PUT or Patch

//DELETE

  Route::prefix('/blog')->group(function (){
    Route::get('/', [PostsController::class, 'index'])->name('blog.index');
    Route::get('/{id}', [PostsController::class, 'show'])->name('blog.show');
    Route::get('/create', [PostsController::class, 'create'])->name('blog.create');
    Route::post('/', [PostsController::class, 'store'])->name('blog.store');
    Route::get('/edit/{id}', [PostsController::class, 'edit'])->name('blog.edit');
    Route::patch('/{id}', [PostsController::class, 'update'])->name('blog.update');
    Route::delete('/{id}', [PostsController::class, 'destroy'])->name('blog.destroy');
});

// Route::resource('blog' , PostsController::class);
//Route for invoke method

Route::get('/', HomeController::class);
//Multiple HTTP verbs
// Route::match(['GET','POST'], '/blog', [PostsController::class, 'index']);
// Route::any('blog', [PostsController::class, 'index']);

//Return view 
// Route::view('/blog', 'blog.index', ['name' => 'Code with Joshua']);

//Fallback route
Route::fallback(FallbackController::class);






