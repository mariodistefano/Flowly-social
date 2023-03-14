<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RevisorController;

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


// ARTICOLI
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
// Dettaglio articolo
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');
// filtro per categoria
Route::get('/article/category/{category}' , [ArticleController::class, 'byCategory'])->name('article.byCategory');
// filtro per user
Route::get('/article/user{user}' , [ArticleController::class, 'byUser'])->name('article.byUser');
// MIDDLEWARE REDATTORE
Route::middleware('writer')->group(function(){
    // rotta articolo
    Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
    // la rotta post di store salva nel database
    Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
});
// rotta tnt
Route::get('/article/search', [ArticleController::class, 'articleSearch'])->name('article.search');






// Rotte middleware ADMIN
Route::middleware('admin')->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/{user}/set-admin', [AdminController::class, 'setAdmin'])->name('admin.setAdmin');
    Route::get('/admin/{user}/set-revisor', [AdminController::class, 'setRevisor'])->name('admin.setRevisor');
    Route::get('/admin/{user}/set-writer', [AdminController::class, 'setWriter'])->name('admin.setWriter');
    Route::put('/admin/edit/{tag}/tag', [AdminController::class, 'editTag'])->name('admin.editTag');
    Route::delete('/admin/delete/{tag}/tag', [AdminController::class, 'deleteTag'])->name('admin.deleteTag');
    Route::put('/admin/edit/{category}/category', [AdminController::class, 'editCategory'])->name('admin.editCategory');
    Route::delete('/admin/delete/{category}/category', [AdminController::class, 'deleteCategory'])->name('admin.deleteCategory');
    Route::post('/admin/category/store', [AdminController::class, 'storeCategory'])->name('admin.storeCategory');

});
// REVISOR
Route::middleware('revisor')->group(function(){
    Route::get('/revisor/dashboard', [RevisorController::class, 'dashboard'])->name('revisor.dashboard');
    Route::get('/revisor/{article}accept', [RevisorController::class, 'acceptArticle'])->name('revisor.acceptArticle');
    Route::get('/revisor/{article}reject', [RevisorController::class, 'rejectArticle'])->name('revisor.rejectArticle');
    Route::get('/revisor/{article}undo', [RevisorController::class, 'undoArticle'])->name('revisor.undoArticle');
});

// rotta dashboard writer

Route::middleware('writer')->group(function(){
    Route::get('/writer/dashboard', [WriterController::class, 'dashboard'])->name('writer.dashboard');
    Route::get('/article/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');
});






// 
// COMMENTI
Route::get('/comment/create', [CommentController::class, 'create'])->name('comment.create');
Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store');
Route::get('/comment/article/{article}' , [CommentController::class, 'byArticle'])->name('comment.byArticle');
