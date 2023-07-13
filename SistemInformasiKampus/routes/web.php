<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;


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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/lecturer', function () {
    return view('lecturer');
});
Route::get('/study_program', function () {
    return view('study_program');
});


Route::get('/', [HomeController::class, 'index'])->name('home');

// Jurusan
Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan');
Route::post('/jurusan', [JurusanController::class, 'store'])->name('jurusan.store');
Route::get('/jurusan/{id}', [JurusanController::class, 'view'])->name('jurusan.view');
Route::post('/jurusan/{id}', [JurusanController::class, 'update'])->name('jurusan.update');
Route::get('/jurusan/{id}/delete', [JurusanController::class, 'delete'])->name('jurusan.delete');

// Mata Kuliah
Route::get('/mata-kuliah', [MatakuliahController::class, 'index'])->name('mata-kuliah');
Route::post('/mata-kuliah', [MatakuliahController::class, 'store'])->name('mata-kuliah.store');
Route::get('/mata-kuliah/{id}', [MatakuliahController::class, 'view'])->name('mata-kuliah.view');
Route::post('/mata-kuliah/{id}', [MatakuliahController::class, 'update'])->name('mata-kuliah.update');
Route::get('/mata-kuliah/{id}/delete', [MatakuliahController::class, 'delete'])->name('mata-kuliah.delete');

// Dosen
Route::get('/dosen', [DosenController::class, 'index'])->name('dosen');
Route::post('/dosen', [DosenController::class, 'store'])->name('dosen.store');
Route::get('/dosen/{id}', [DosenController::class, 'view'])->name('dosen.view');
Route::post('/dosen/{id}', [DosenController::class, 'update'])->name('dosen.update');
Route::get('/dosen/{id}/delete', [DosenController::class, 'delete'])->name('dosen.delete');

// Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'view'])->name('mahasiswa.view');
Route::post('/mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::get('/mahasiswa/{id}/delete', [MahasiswaController::class, 'delete'])->name('mahasiswa.delete');