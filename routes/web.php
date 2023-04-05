<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PageController;
use App\Models\Album;

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

Route::get('/', [PageController::class, 'index'])->name('homepage');

Route::resource('albums', AlbumController::class);

//rotta per il dettaglio della risorsa
//Route::post('albums', [AlbumController::class, 'store'])->name('albums.store');

//Route::put('albums/{album}/update', [AlbumController::class, 'update'])->name('albums.update');

//rotta per la lista della risorsa
//Route::get('/albums', [AlbumController::class, 'index'])->name('albums.index');


//rotta per il form di creazione della risorsa
//Route::get('albums/create', [AlbumController::class, 'create']);
