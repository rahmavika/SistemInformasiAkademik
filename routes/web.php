<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DashboardMahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\DashboardDosenController;
use App\Http\Controllers\DashboardMataKuliahController;
use App\Http\Controllers\DashboardProdiController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\RegisterController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
});
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/prodi', [ProdiController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware('auth');

Route::resource('/dashboard-mahasiswa', DashboardMahasiswaController::class)->middleware(['auth']);
Route::resource('/dashboard-dosen', DashboardDosenController::class)->middleware('auth');
Route::resource('/dashboard-prodi', DashboardProdiController::class)->middleware('auth');
Route::resource('/dashboard-user', DashboardUserController::class)->middleware('auth');
Route::resource('/dashboard-matakuliah', DashboardMataKuliahController::class)->middleware('admin','auth');

//penggunaan middleware pada laravel, digunakan sebagai penghubung

Route::get('/cetak-pdf/mahasiswa', [DashboardMahasiswaController::class, 'cetakPdf']);
Route::get('/cetak-pdf/prodi', [DashboardProdiController::class, 'cetakPdf']);
Route::get('/cetak-pdf/dosen', [DashboardDosenController::class, 'cetakPdf']);

