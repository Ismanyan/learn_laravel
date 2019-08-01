<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blog extends Controller
{ 
    // Home view  
    public function index() {
        return view('blog/home');
    }

    // tentang view
    public function tentang() {
        return view('blog/about');
    }

    // kontak view
    public function kontak() {
        return view('blog/contact');
    }

    // Index Method
    // public function index() {
    //     $data = ["Biodata Page","Bilkis Ismail"];
    //     // Call view biodata and passing data to view
    //     $skill = ["web dev","programming tutor","designer"];
    //     return view('biodata',['data' => $data, 'skill' => $skill]);
    // }

    // Get data from url
    public function getDataUrl($data) {
        return $data;
    }

    // Form view
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
