<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MobilController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$mobil = DB::table('mobil')->get();
        // $mobil = DB::table('pegawai')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('indexMobil',['mobil' => $mobil]);

    }

    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahMobil');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('mobil')->insert([
			'merkmobil' => $request->merkmobil,
			'stockmobil' => $request->stockmobil,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/mobil');

	}

	// method untuk hapus data pegawai
	public function hapus($kodemobil)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('mobil')->where('kodemobil',$kodemobil)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/mobil');
	}
}
