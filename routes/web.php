<?php

use App\Http\Controllers\DVDController;
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
// Route::get()->name();
// Route::get()->name();
// Route::post()->name();
// Route::get()->name();
// Route::get()->name();
// Route::put()->name();

// ---- Genre Routes ----
// Route::get()->name();
// Route::get()->name();
// Route::post()->name();
// Route::get()->name();
// Route::get()->name();
// Route::put()->name();

// ---- Location Routes ----
// Route::get()->name();
// Route::get()->name();
// Route::post()->name();
// Route::get()->name();
// Route::get()->name();
// Route::put()->name();

// ---- Type Routes ----
// Route::get()->name();
// Route::get()->name();
// Route::post()->name();
// Route::get()->name();
// Route::get()->name();
// Route::put()->name();