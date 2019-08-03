<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Call model siswa
use App\Siswa;

class SiswaController extends Controller
{
    //
    public function index()
    {
        // mengambil data siswa
        $siswa = Siswa::where('nama','Jasmin Maida Hastuti')->get();
        
    	// mengirim data siswa ke view siswa
    	return view('siswa', ['siswa' => $siswa]);
    }
}
