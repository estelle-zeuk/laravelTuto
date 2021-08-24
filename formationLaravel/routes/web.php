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

Route::get('/', [PostController::index]);

/* Route::get('/posts', function () {
    return response()->json([
        "title"=>"J'apprends laravel",
        "description" => "C'est vraiment très intéressant!!!"
    ]);
});

Route::get('/articles', function(){
    return view('articles');
}); */
