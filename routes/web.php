<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});

// rute untuk di php artisan route:list
Route::middleware('guest')->group(function () {
Route::get('/registrasi', [Authcontroller::class, 'tampilRegistrasi'])->name('registrasi.tampil');
Route::post('/registrasi/submit', [Authcontroller::class, 'submitRegistrasi'])->name('registrasi.submit');

// rute login
Route::get('/login', [Authcontroller::class, 'tampilLogin'])->name('login');
Route::post('/login/submit', [Authcontroller::class, 'submitLogin'])->name('login.submit');
});

// rute untuk mencari di browser
Route::get('/mahasiswa',[MahasiswaController::class, 'tampil'])->name('mahasiswa.tampil');
// supaya hanya user yang sudah registrasi saja yg bisa tambah mahasiswa
Route::middleware(['auth'])->group(function () {
    // rute logout
Route::post('/logout', [Authcontroller::class, 'logout'])->name('logout');
Route::get('/tambah',[MahasiswaController::class, 'tambah'])->name('mahasiswa.tambah');
Route::post('/submit',[MahasiswaController::class, 'submit'])->name('mahasiswa.submit');
Route::get('/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::post('/update/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::post('/delete/{id}', [MahasiswaController::class, 'delete'])->name('mahasiswa.delete');
});

