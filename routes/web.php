<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PublicController;
use App\Models\Article;
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

Route::get('/', [PublicController::class, 'home'])->name('homepage');

// rotta lavora con noi
Route::get('/careers', [PublicController::class, 'careers'])->name('careers');
Route::post('/careers/submit', [PublicController::class, 'careersSubmit'])->name('careers.submit');


// rotta articolo
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
// la rotta post di store salva nel database
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');

Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
// Dettaglio articolo
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');
// filtro per categoria
Route::get('/article/category/{category}' , [ArticleController::class, 'byCategory'])->name('article.byCategory');

Route::get('/article/user{user}' , [ArticleController::class, 'byUser'])->name('article.byUser');

Route::get('/comment/create', [CommentController::class, 'create'])->name('comment.create');
Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store');