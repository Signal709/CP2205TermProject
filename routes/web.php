<?php

use App\Http\Controllers\DVDController;
use App\Http\Controllers\FormatController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\TypeController;
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

// ---- Home Page Route ----
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// ---- Admin Routes ----

// ---- DVD Routes ----
Route::get('/DVDs', [DVDController::class, 'index'])->name('DVDs.index');
Route::get('/DVDs/{id}', [DVDController::class, 'show'])->name('DVDs.show');
Route::post('/DVDs', [DVDController::class, 'store'])->name('DVDs.store');
Route::get('/DVDs/{create}', [DVDController::class, 'create'])->name('DVDs.create');
Route::get('/DVDs/{id}/edit', [DVDController::class, 'edit'])->name('DVDs.edit');
Route::put('/DVDs/{id}', [DVDController::class, 'update'])->name('DVDs.update');

// ---- Format Routes ----
Route::get('/Format', [FormatController::class, 'index'])->name('Format.index');
Route::get('/Format/{id}', [FormatController::class, 'show'])->name('Format.show');
Route::post('/Format', [FormatController::class, 'store'])->name('Format.store');
Route::get('/Format/{create}', [FormatController::class, 'create'])->name('Format.create');
Route::get('/Format/{id}/edit', [FormatController::class, 'edit'])->name('Format.edit');
Route::put('/Format/{id}', [FormatController::class, 'update'])->name('Format.update');

// ---- Genre Routes ----
Route::get('/Genre', [GenreController::class, 'index'])->name('Genre.index');
Route::get('/Genre/{id}', [GenreController::class, 'show'])->name('Genre.show');
Route::post('/Genre', [GenreController::class, 'store'])->name('Genre.store');
Route::get('/Genre/{create}', [GenreController::class, 'create'])->name('Genre.create');
Route::get('/Genre/{id}/edit', [GenreController::class, 'edit'])->name('Genre.edit');
Route::put('/Genre/{id}', [GenreController::class, 'update'])->name('Genre.update');

// ---- Location Routes ----
Route::get('/Location', [LocationController::class, 'index'])->name('Location.index');
Route::get('/Location/{id}', [LocationController::class, 'show'])->name('Location.show');
Route::post('/Location', [LocationController::class, 'store'])->name('Location.store');
Route::get('/Location{create}', [LocationController::class, 'create'])->name('Location.create');
Route::get('/Location/{id}/edit', [LocationController::class, 'edit'])->name('Location.edit');
Route::put('/Location/{id}', [LocationController::class, 'update'])->name('Location.update');

// ---- Type Routes ----
Route::get('/Type', [TypeController::class, 'index'])->name('Type.index');
Route::get('/Type/{id}', [TypeController::class, 'show'])->name('Type.show');
Route::post('/Type', [TypeController::class, 'store'])->name('Type.store');
Route::get('/Type/{create}', [TypeController::class, 'create'])->name('Type.create');
Route::get('/Type/{id}/edit', [TypeController::class, 'edit'])->name('Type.edit');
Route::put('/Type/{id}', [TypeController::class, 'update'])->name('Type.update');