<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangaCtrl;

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

Route::get('/', [MangaCtrl::class,'index']);

Route::get('/serie/create', function () { return view('add'); })->name('serie.create');

Route::post('/serie/create', [MangaCtrl::class,'addManga']);
