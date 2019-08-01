<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Can use db
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    // index Page
    public function index(){
        // mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->get();

        return view('index',['pegawai'=>$pegawai, 'title' => 'home']);
    }

    // Add Page
    public function add(){
        return view('add',['title' => 'add page']);
    }
    
    // Method addNew
    public function addnew(Request $request){
        // insert data to pegawai table
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        // redirect to home
        return redirect('/');
    }

    // Edit Page 
    public function edit($id){
        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit',['title' => 'edit page','pegawai' => $pegawai]);
    }
    // Method Edit
    public function editPegawai(Request $request){
        // update data pegawai
        DB::table('pegawai')->where('pegawai_id',$request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        // redirect to home
        return redirect('/');
    }

    // Delete Method
    public function delete($id){
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pegawai')->where('pegawai_id',$id)->delete();
            
        // redirect to home
        return redirect('/');
    }
}
