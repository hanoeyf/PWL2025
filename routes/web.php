<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;

// 
Route::resource('photos', PhotoController::class);

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'show']);
Route::get('/articles/{id}', [ArticleController::class, 'show']);

Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Hanifah']);
    });

Route::get('/greeting', [WelcomeController::class, 'greeting']);
    


