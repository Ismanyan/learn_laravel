<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IsmanyanController extends Controller
{
    public function input()
    {
        return view('input');
    }

    public function proses(Request $request)
    {
        $message = [
            'required' => 'Kudu di isi om',
            'min' => 'minimal 5 huruf om',
            'max' => 'maksimal 20 huruf om'
        ];

        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'pekerjaan' => 'required',
            'usia' => 'required|numeric'
        ], $message);

        return view('proses',['data' => $request]);
    }
}
