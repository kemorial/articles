<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticlePreviewController;
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

Route::get('/', [ArticlePreviewController::class, 'index'])->name('index');
Route::get('/article/{id}', [ArticleController::class, 'getArticle'])->name('article');
// Route::get('/{id}',[::class,'']);
