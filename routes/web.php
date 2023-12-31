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
[FilmsController::class, 'edit'])->name('films.edit')->middleware('CheckRole:admin');

Route::get('films/{film}', 
[FilmsController::class, 'show'])->name('films.show');

Route::post('films',
[FilmsController::class, 'store'])->name('films.store')->middleware('CheckRole:admin');

Route::patch('films/maj/{film}',
[FilmsController::class, 'update'])->name('films.update')->middleware('CheckRole:admin');

Route::delete('films/del/{film}',
[FilmsController::class, 'destroy'])->name('films.destroy')->middleware('CheckRole:admin');

Route::get('relation',
[FilmsController::class, 'createActeurFilm'])->name('films.createActeurFilm')->middleware('CheckRole:admin');

Route::get('relation/films/{film}',
[FilmsController::class, 'createActeurFilmShowFilm'])->name('films.createActeurFilmShowFilm')->middleware('CheckRole:admin');

Route::post('relation',
[FilmsController::class, 'storeActeurFilm'])->name('films.storeActeurFilm')->middleware('CheckRole:admin');

Route::delete('relation/del/{film}/{personne}',
[FilmsController::class, 'destroyActeurFilm'])->name('films.destroyActeurFilm')->middleware('CheckRole:admin');

Route::get('personnes', 
[PersonnesController::class, 'index'])->name('personnes.index');

Route::get('/personnes/ajouter',
[PersonnesController::class, 'create'])->name('personnes.create')->middleware('CheckRole:admin');

Route::get('personnes/modifier/{personne}',
[PersonnesController::class, 'edit'])->name('personnes.edit')->middleware('CheckRole:admin');

Route::patch('personnes/modifier/{personne}',
[PersonnesController::class, 'update'])->name('personnes.update')->middleware('CheckRole:admin');

Route::get('personnes/{personne}', 
[PersonnesController::class, 'show'])->name('personnes.show');

Route::post('personnes',
[PersonnesController::class, 'store'])->name('personnes.store')->middleware('CheckRole:admin');

Route::delete('personnes/{id}',
[PersonnesController::class, 'destroy'])->name('personnes.destroy')->middleware('CheckRole:admin');

Route::get('login',
[UsagersController::class, 'showLoginForm'])->name('usagers.showLogin');

Route::post('login',
[UsagersController::class, 'login'])->name('login');

Route::post('logout',
[UsagersController::class, 'logout']) ->name('logout');

Route::get('compte',
[UsagersController::class, 'index'])->name('usagers.index')->middleware('CheckRole:admin');

Route::get('compte/creation',
[UsagersController::class, 'create'])->name('usagers.create');

Route::post('compte/store',
[UsagersController::class, 'store'])->name('usagers.store');

Route::get('compte/monCompte',
[UsagersController::class, 'show'])->name('usagers.show')->middleware('auth');

Route::get('compte/monCompte/modifier/{usager}',
[UsagersController::class, 'edit'])->name('usagers.edit')->middleware('auth');

Route::get('compte/monCompte/modifier/password/{usager}',
[UsagersController::class, 'editPassword'])->name('usagers.editPassword')->middleware('auth');

Route::patch('compte/monCompte/modifier/{usager}',
[UsagersController::class, 'update'])->name('usagers.update')->middleware('auth');

Route::patch('compte/monCompte/modifier/password/{usager}',
[UsagersController::class, 'updatePassword'])->name('usagers.updatePassword')->middleware('auth');

Route::delete('compte/del/{usager}',
[UsagersController::class, 'destroy'])->name('usagers.destroy')->middleware('auth');

Route::delete('compte/admin/del/{usager}',
[UsagersController::class, 'destroyAdmin'])->name('usagers.destroyAdmin')->middleware('CheckRole:admin');