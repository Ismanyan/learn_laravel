<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    // table
    protected $table = "telepon";
    
    // connect to app/pengguna
    public function pengguna()
    {
    	return $this->belongsTo('App\Pengguna');
    }
}
