<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pasienController;


Route::get('/', function () {return view('layout.app'); });
Route::get('/pasien', [pasienController::class, 'index'])->name('sistem.index');
Route::get('/pasien/create', [pasienController::class, 'create'])->name('sistem.create');
Route::post('/pasien/store', [pasienController::class, 'store'])->name('sistem.store');

// Edit Buku
Route::get('/buku/{id}/edit', [pasienController::class, 'edit'])->name('sistem.edit');
Route::put('/buku/{id}', [pasienController::class, 'update'])->name('sistem.update');

Route::delete('/buku/{id}', [pasienController::class, 'destroy'])->name('sistem.destroy');
