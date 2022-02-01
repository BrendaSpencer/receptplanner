<?php

use App\Models\Recept;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\inlogController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\auth\registreerController;
use App\Http\Controllers\auth\GebruikersprofielController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ReceptController;
use App\Models\ReceptCategorie;



Route::get('/home', [homeController::class, 'index'])->name('home');
  
Route::get('/registreer', [registreerController::class, 'index'])->name('registreer');
Route::post('/registreer', [registreerController::class, 'store']);

Route::get('/inloggen', [inlogController::class, 'index'])->name('login');
Route::post('/inloggen', [inlogController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/gebruikersprofiel', [GebruikersprofielController::class, 'index'])->name('gebruikersprofiel');
Route::post('/gebruikersprofiel', [GebruikersprofielController::class, 'store']);

Route::get('/recept/{recept:id}', [ReceptController::class, 'show']);
Route::post('/recept', [ReceptController::class, 'store']);

Route::get('/recepttoevoegen', [ReceptController::class, 'index'])->name('receptToevoegen')->middleware('auth');
Route::post('/recepttoevoegen', [ReceptController::class, 'store']);