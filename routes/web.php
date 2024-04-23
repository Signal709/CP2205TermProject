<?php

use App\Http\Controllers\ProfileController;
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
Route::get('/DVDs/create', [DVDController::class, 'create'])->name('DVDs.create')->middleware('auth');
Route::get('/DVDs/{id}', [DVDController::class, 'show'])->name('DVDs.show');
Route::post('/DVDs', [DVDController::class, 'store'])->name('DVDs.store')->middleware('auth');
Route::get('/DVDs/{id}/edit', [DVDController::class, 'edit'])->name('DVDs.edit');
Route::put('/DVDs/{id}', [DVDController::class, 'update'])->name('DVDs.update');
Route::delete('/DVDs/{id}', [DVDController::class, 'destroy'])->name('DVDs.destroy');

// ---- Format Routes ----
Route::get('/Format', [FormatController::class, 'index'])->name('Format.index');
Route::get('/Format/create', [FormatController::class, 'create'])->name('Format.create')->middleware('auth');
Route::get('/Format/{id}', [FormatController::class, 'show'])->name('Format.show');
Route::post('/Format', [FormatController::class, 'store'])->name('Format.store')->middleware('auth');
Route::get('/Format/{id}/edit', [FormatController::class, 'edit'])->name('Format.edit')->middleware('auth');
Route::put('/Format/{id}', [FormatController::class, 'update'])->name('Format.update')->middleware('auth');
Route::delete('/Format/{id}', [FormatController::class, 'destroy'])->name('Format.destroy')->middleware('auth');

// ---- Genre Routes ----
Route::get('/Genre', [GenreController::class, 'index'])->name('Genre.index');
Route::get('/Genre/create', [GenreController::class, 'create'])->name('Genre.create')->middleware('auth');
Route::get('/Genre/{id}', [GenreController::class, 'show'])->name('Genre.show');
Route::post('/Genre', [GenreController::class, 'store'])->name('Genre.store')->middleware('auth');
Route::get('/Genre/{id}/edit', [GenreController::class, 'edit'])->name('Genre.edit')->middleware('auth');
Route::put('/Genre/{id}', [GenreController::class, 'update'])->name('Genre.update')->middleware('auth');
Route::delete('/Genre/{id}', [GenreController::class, 'destroy'])->name('Genre.destroy')->middleware('auth');

// ---- Location Routes ----
Route::get('/Location', [LocationController::class, 'index'])->name('Location.index');
Route::get('/Location/create', [LocationController::class, 'create'])->name('Location.create')->middleware('auth');
Route::get('/Location/{id}', [LocationController::class, 'show'])->name('Location.show');
Route::post('/Location', [LocationController::class, 'store'])->name('Location.store')->middleware('auth');
Route::get('/Location/{id}/edit', [LocationController::class, 'edit'])->name('Location.edit')->middleware('auth');
Route::put('/Location/{id}', [LocationController::class, 'update'])->name('Location.update')->middleware('auth');
Route::delete('/Location/{id}', [LocationController::class, 'destroy'])->name('Location.destroy')->middleware('auth');

// ---- Type Routes ----
Route::get('/Type', [TypeController::class, 'index'])->name('Type.index');
Route::get('/Type/create', [TypeController::class, 'create'])->name('Type.create')->middleware('auth');
Route::get('/Type/{id}', [TypeController::class, 'show'])->name('Type.show');
Route::post('/Type', [TypeController::class, 'store'])->name('Type.store')->middleware('auth');
Route::get('/Type/{id}/edit', [TypeController::class, 'edit'])->name('Type.edit')->middleware('auth');
Route::put('/Type/{id}', [TypeController::class, 'update'])->name('Type.update')->middleware('auth');
Route::delete('/Type/{id}', [TypeController::class, 'destroy'])->name('Type.destroy')->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
