<?php

use App\Http\Controllers\PDFController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\SiswaController;
use App\Models\Prestasi;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/form-pendaftaran', function () {
    return view('form-pendaftaran');
})->name('form-pendaftaran');
Route::get('/syarat-pendaftaran', function () {
    return view('syarat-pendaftaran');
})->name('syarat-pendaftaran');
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi');
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');
Route::post('/daftar', [SiswaController::class, 'store'])->name('siswa.store');

Route::get('/laporan-pendaftaran-siswa/{id}', [PDFController::class, 'cetakPendaftaranSiswa'])->name('laporan.pendaftaran-siswa');

Route::get('/laporan-pendaftaran', [PDFController::class, 'cetakPendaftaran'])->name('laporan.pendaftaran');