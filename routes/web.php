<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PagesController;

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


Route::get('/', [App\Http\Controllers\PagesController::class, 'taskPage'])->name('main');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/add', [ArticlesController::class, "add"]);
Route::get('/article/{id}/edit', [App\Http\Controllers\PagesController::class, 'articlePage'])->middleware('auth');
Route::post('/article/edit', [ArticlesController::class, "edit"])->middleware('auth');


