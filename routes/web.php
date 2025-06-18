<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Profilumk;


Route::get('/', [Dashboard::class, 'index'])->name('dashboard');

//DATA UMK
Route::get('/profil', [Profilumk::class ,'index'])->name('profil');
Route::get('/profil/tambah', [Profilumk::class ,'create'])->name('profil.tambah');
Route::post('/profil', [Profilumk::class ,'store'])->name('profil.store');
