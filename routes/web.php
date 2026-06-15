<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\EASController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});

Route::get('blog', function () {
    return view('blog');
});

//Tugas
Route::get('pert-1', function () {
    return view('pertemuan1');
});
Route::get('pert-2', function () {
    return view('pertemuan2');
});
Route::get('pert-3', function () {
    return view('pertemuan3');
});
Route::get('pert-4', function () {
    return view('pertemuan4');
});
Route::get('pert-5', function () {
    return view('pertemuan5');
});


Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

//route CRUD
Route::get('/pegawainama/nama', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawaitambah',[PegawaiDBController::class, 'tambah']);
Route::post('/pegawaistore',[PegawaiDBController::class, 'store']);
Route::get('/pegawaiedit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawaiupdate', [PegawaiDBController::class, 'update']);
Route::get('/pegawaihapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawaicari', [PegawaiDBController::class, 'cari']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//route CRUD nilai kuliah
Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index']);
Route::get('/nilaikuliahtambah',[NilaiKuliahController::class, 'tambah']);
Route::post('/nilaikuliahstore',[NilaiKuliahController::class, 'store']);

//route CRUD keranjang belanja
Route::get('/keranjangbelanja', [KeranjangController::class, 'index']);
Route::get('/keranjangtambah/{id}',[KeranjangController::class, 'tambah']);
Route::post('/keranjangstore',[KeranjangController::class, 'store']);
Route::get('/keranjanghapus/{id}', [KeranjangController::class, 'hapus']);

//route CRUD mobil (pra EAS)
Route::get('/mobil', [MobilController::class, 'index']);
Route::get('/mobiltambah',[MobilController::class, 'tambah']);
Route::post('/mobilstore',[MobilController::class, 'store']);
Route::get('/mobilhapus', [MobilController::class, 'hapus']);

//route CRUD EAS
Route::get('/eas', [EASController::class, 'index']);
Route::get('/eastambah',[EASController::class, 'tambah']);
Route::post('/easstore',[EASController::class, 'store']);
