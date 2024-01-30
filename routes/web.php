<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LpController;
use App\Http\Controllers\PerangkatController;
use App\Http\Controllers\PotensiController;
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

Route::get('/', function () {
    return view('LandingPage.masterLp');
});

Route::get('/visiMisi', [LpController::class, 'visi'])->name('lpvisi');
Route::get('/sejarah', [LpController::class, 'sejarah'])->name('lpsejarah');
Route::get('/struktur', [LpController::class, 'struktur'])->name('lpstruktur');
Route::get('/perangkat', [LpController::class, 'perangkat'])->name('lpperangkat');

Route::get('/berita', [LpController::class, 'berita'])->name('lpberita');
Route::get('/berita/detail{id}', [LpController::class, 'detailBerita'])->name('berita-detail');

Route::get('/potensi', [LpController::class, 'potensi'])->name('lppotensi');
Route::get('/potensi/detail{id}', [LpController::class, 'detailPotensi'])->name('potensi-detail');

//perangkat desa
Route::get('/perangkatDesa/index', [PerangkatController::class, 'PerangkatDesa'])->name('perangkat-index');
Route::post('perangkatDesa/store', [PerangkatController::class, 'store'])->name('perangkat-store');
Route::delete('/perangkat/delete{id}', [PerangkatController::class, 'destroy'])->name('perangkat-delete');

//potensi desa
Route::get('/potensiDesa/index', [PotensiController::class, 'PotensiDesa'])->name('potensi-index');
Route::post('potensiDesa/store', [PotensiController::class, 'store'])->name('potensi-store');
Route::delete('/potensi/delete{id}', [PotensiController::class, 'destroy'])->name('potensi-delete');

//berita desa
Route::get('/beritaDesa/index', [BeritaController::class, 'BeritaDesa'])->name('berita-index');
Route::post('beritaDesa/store', [BeritaController::class, 'store'])->name('berita-store');
Route::delete('/berita/delete{id}', [BeritaController::class, 'destroy'])->name('berita-delete');