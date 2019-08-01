<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blog extends Controller
{   
    // Index Method
    public function index() {
        // Call view biodata and passing data to view
        $data = ["biodata","Bilkis Ismail"];
        $skill = ["web dev","programming tutor","designer"];
        return view('biodata',['data' => $data, 'skill' => $skill]);
    }
}
