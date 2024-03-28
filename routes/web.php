<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategotyController;
use App\Http\Controllers\UserController;

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

Route::get('/',[PublicController::class,'homepage'] )->name('homepage');


Route::get('/profile',[UserController::class,'profile'])->name('profile');
Route::delete('/cancella/utente',[UserController::class,'destroy'])->name('user.delete');


Route::post('/contact/submit',[PublicController::class,'contactSubmit'])->name('contact.submit');

Route::get('/create/movie',[MovieController::class, 'create'])->name('movie.create');
Route::post('/create/movie/submit',[MovieController::class, 'store'])->name('movie.submit');
Route::get('/movie/index',[MovieController::class, 'index'])->name('movie.index');

Route::get('/create-category',[CategoryController::class,'create'])->name('category.create');
Route::post('/create-category/submit',[CategoryController::class,'store'])->name('category.store');
Route::get('/index/categories',[CategoryController::class,'index'])->name('category.index');
Route::get('/dettaglio/categoria/{category}',[CategoryController::class,'show'])->name('category.show');
Route::get('/modifica-categoria/{category}',[CategoryController::class,'edit'])->name('category.edit');
Route::put('/modifica-categoria/{category}/submit',[CategoryController::class,'update'])->name('category.update');
Route::delete('/cancella-categoria/{category}',[CategoryController::class,'destroy'])->name('category.delete');