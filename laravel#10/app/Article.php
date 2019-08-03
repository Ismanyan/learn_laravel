<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // tags function
    public function tags(){
    	return $this->hasMany('App\Tag');
    }
}
