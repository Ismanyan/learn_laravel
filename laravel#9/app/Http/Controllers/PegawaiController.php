<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Can use db
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {   
         // mengambil data dari table pegawai
		$pegawai = DB::table('pegawai')->paginate(10);
 
        // mengirim data pegawai ke view index
		return view('index',['pegawai' => $pegawai]);
    }
}
