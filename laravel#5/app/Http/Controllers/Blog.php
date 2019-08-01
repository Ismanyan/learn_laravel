<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blog extends Controller
{   
    // Index Method
    public function index() {
        $data = ["Biodata Page","Bilkis Ismail"];
        // Call view biodata and passing data to view
        $skill = ["web dev","programming tutor","designer"];
        return view('biodata',['data' => $data, 'skill' => $skill]);
    }

    // Get data from url
    public function getDataUrl($data) {
        return $data;
    }

    public function form() {
        return view('form');
    }

    // Get data from form post
    public function getDataPost(Request $request) {
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        
        return "Nama : ".$nama.", alamat : ".$alamat;
    }
}
