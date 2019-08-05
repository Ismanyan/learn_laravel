<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Ismail;
use Illuminate\Support\Facades\Mail;
class IsmaController extends Controller
{
    public function index(){
 
		Mail::to("sovianbasecamp@gmail.com")->send(new Ismail());
 
		return "Email telah dikirim";
 
	}
}
