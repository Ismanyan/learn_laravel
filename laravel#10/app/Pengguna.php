<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    //table
    protected $table = "pengguna";
    
    // Relasi ke app/telepon
    public function telepon()
    {
    	return $this->hasOne('App\Telepon');
    }
}
