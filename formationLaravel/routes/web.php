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

Route::get('/', [PostController::class, 'index'])->name('welcome');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::get('/create-polymorphic-registration', [PostController::class, 'register']);

Route::get('/contact', [PostController::class, 'contact'])->name('contact');

/* Route::get('/posts', function () {
    return response()->json([
        "title"=>"J'apprends laravel",
        "description" => "C'est vraiment très intéressant!!!"
    ]);
});

Route::get('/articles', function(){
    return view('articles');
}); */
