<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\PersonnesController;
use App\Http\Controllers\UsagersController;

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
[FilmsController::class, 'index'])->name('films.index');

Route::get('films/ajouter',
[FilmsController::class, 'create'])->name('films.create')->middleware('CheckRole:admin');

Route::get('films/maj/{film}',
[FilmsController::class, 'edit'])->name('films.edit');

Route::get('films/{film}', 
[FilmsController::class, 'show'])->name('films.show');

Route::post('films',
[FilmsController::class, 'store'])->name('films.store');

Route::patch('films/maj/{film}',
[FilmsController::class, 'update'])->name('films.update');

Route::delete('films/del/{film}',
[FilmsController::class, 'destroy'])->name('films.destroy');

Route::get('relation',
[FilmsController::class, 'createActeurFilm'])->name('films.createActeurFilm');

Route::get('relation/films/{film}',
[FilmsController::class, 'createActeurFilmShowFilm'])->name('films.createActeurFilmShowFilm');

Route::post('relation',
[FilmsController::class, 'storeActeurFilm'])->name('films.storeActeurFilm');

Route::delete('relation/del/{film}/{personne}',
[FilmsController::class, 'destroyActeurFilm'])->name('films.destroyActeurFilm');

Route::get('personnes', 
[PersonnesController::class, 'index'])->name('personnes.index');

Route::get('/personnes/ajouter',
[PersonnesController::class, 'create'])->name('personnes.create');

Route::get('personnes/modifier/{personne}',
[PersonnesController::class, 'edit'])->name('personnes.edit');

Route::patch('personnes/modifier/{personne}',
[PersonnesController::class, 'update'])->name('personnes.update');

Route::get('personnes/{personne}', 
[PersonnesController::class, 'show'])->name('personnes.show');

Route::post('personnes',
[PersonnesController::class, 'store'])->name('personnes.store');

Route::delete('personnes/{id}',
[PersonnesController::class, 'destroy'])->name('personnes.destroy');

Route::get('login',
[UsagersController::class, 'showLoginForm'])->name('usagers.showLogin');

Route::post('login',
[UsagersController::class, 'login'])->name('login');

Route::post('logout',
[UsagersController::class, 'logout']) ->name('logout');