<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EASController extends Controller
{
    public function index()
    {
        // mengambil data dari table nilaikuliah
        $nilai_peserta = DB::table('nilai_peserta')->get();

        // mengirim data nilaikuliah ke view index
        return view('indexEAS', ['nilai_peserta' => $nilai_peserta]);
    }

    // method untuk menampilkan view form tambah data
    public function tambah()
    {
        // memanggil view tambah
        return view('tambahEAS');
    }

    // method untuk insert data ke table nilaikuliah
    public function store(Request $request)
    {
        // insert data ke table nilaikuliah
        DB::table('nilai_peserta')->insert([
            'nopeserta' => $request->nopeserta,
            'nilaiteori' => $request->nilaiteori,
            'nilaipraktek' => $request->nilaipraktek
        ]);

        // alihkan halaman ke halaman nilaikuliah
        return redirect('/eas');
    }
}
