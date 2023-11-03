<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\PersonnesController;

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

Route::get('/', 
[FilmsController::class, 'index']);

Route::get('films', 
[FilmsController::class, 'index']);

Route::get('films/{film}', 
[FilmsController::class, 'show'])->name('film.show');

Route::get('acteurs', 
[PersonnesController::class, 'index']);

Route::get('/personnes/{personne}', 
[PersonnesController::class, 'show'])->name('personnes.show');

Route::get('/acteurs/ajouter',
[PersonnesController::class, 'create'])->name('acteurs.create');

Route::get('/films/ajouter',
[FilmsController::class, 'create'])->name('films.create');

Route::post('/acteurs',
[PersonnesController::class, 'store'])->name('acteurs.store');

Route::post('/films',
[FilmsController::class, 'store'])->name('films.store');