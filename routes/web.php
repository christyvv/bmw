<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

// GALERI
Route::get('/galeri', [App\Http\Controllers\GaleriController::class, 'index'])->name('galeri');
Route::get('/galeri/tambah', [App\Http\Controllers\GaleriController::class, 'create'])->name('galeri.tambah');
Route::post('/galeri/tambah/store', [App\Http\Controllers\GaleriController::class, 'store'])->name('galeri.tambah.store');
Route::get('/galeri/edit/{id}', [App\Http\Controllers\GaleriController::class, 'edit'])->name('galeri.edit');
Route::post('/galeri/edit/update/{id}', [App\Http\Controllers\GaleriController::class, 'update'])->name('galeri.edit.update');
Route::get('/galeri/destroy/{id}', [App\Http\Controllers\GaleriController::class, 'destroy'])->name('galeri.destroy');

// BERITA
Route::get('/berita', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita');
Route::get('/berita/tambah', [App\Http\Controllers\BeritaController::class, 'create'])->name('berita.tambah');
Route::post('/berita/tambah/store', [App\Http\Controllers\BeritaController::class, 'store'])->name('berita.tambah.store');
Route::get('/berita/edit/{id}', [App\Http\Controllers\BeritaController::class, 'edit'])->name('berita.edit');
Route::post('/berita/edit/update/{id}', [App\Http\Controllers\BeritaController::class, 'update'])->name('berita.edit.update');
Route::get('/berita/destroy/{id}', [App\Http\Controllers\BeritaController::class, 'destroy'])->name('berita.destroy');

// FASILITAS
Route::get('/fasilitas', [App\Http\Controllers\FasilitasController::class, 'index'])->name('fasilitas');
Route::get('/fasilitas/tambah', [App\Http\Controllers\FasilitasController::class, 'create'])->name('fasilitas.tambah');
Route::post('/fasilitas/tambah/store', [App\Http\Controllers\FasilitasController::class, 'store'])->name('fasilitas.tambah.store');
Route::get('/fasilitas/edit/{id}', [App\Http\Controllers\FasilitasController::class, 'edit'])->name('fasilitas.edit');
Route::post('/fasilitas/edit/update/{id}', [App\Http\Controllers\FasilitasController::class, 'update'])->name('fasilitas.edit.update');
Route::get('/fasilitas/destroy/{id}', [App\Http\Controllers\FasilitasController::class, 'destroy'])->name('fasilitas.destroy');

// KONTAK
Route::get('/kontak', [App\Http\Controllers\KontakController::class, 'index'])->name('kontak');
Route::get('/kontak/tambah', [App\Http\Controllers\KontakController::class, 'create'])->name('kontak.tambah');
Route::post('/kontak/tambah/store', [App\Http\Controllers\KontakController::class, 'store'])->name('kontak.tambah.store');
Route::get('/kontak/edit/{id}', [App\Http\Controllers\KontakController::class, 'edit'])->name('kontak.edit');
Route::post('/kontak/edit/update/{id}', [App\Http\Controllers\KontakController::class, 'update'])->name('kontak.edit.update');
Route::get('/kontak/destroy/{id}', [App\Http\Controllers\KontakController::class, 'destroy'])->name('kontak.destroy');

Route::get('/website', [App\Http\Controllers\WebsiteController::class, 'index'])->name('website');
