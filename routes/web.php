<?php

use App\Http\Controllers\ArticleController;
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

// rotta contattaci
Route::get('/contattaci', [PublicController::class, 'contacts'])->name('contacts');


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

