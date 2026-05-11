<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;

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
    return view('pertemuan5');
});
Route::get('pert-2', function () {
    return view('pertemuan5');
});
Route::get('pert-3', function () {
    return view('pertemuan5');
});
Route::get('pert-4', function () {
    return view('pertemuan5');
});
Route::get('pert-5', function () {
    return view('pertemuan5');
});


Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

//route CRUD
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/formulir/proses', 'PegawaiController@proses');
