<?php

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

Route::get('/', function () {return view('welcome');})->name('welcome');

Use App\Http\Controllers\logica;
Route::get('/struttura', [logica::class,'struttura'])->name('struttura');

Route::get('/corsi', [logica::class,'corsi'])->name('corsi');

Route::get('/contatti', [logica::class,'contatti'])->name('contatti');

Route::get('/homepage', [logica::class,'homepage'])->name('homepage');

Route::get('/indirizzo', [logica::class,'indirizzo'])->name('indirizzo');