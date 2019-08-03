<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //article function
    public function article(){
    	return $this->belongsTo('App\Article');
    }
}
