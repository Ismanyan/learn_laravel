<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guru extends Model
{
    // use softdeletes
    use SoftDeletes;

    //table 
    protected $table = "guru";

    // dates on table guru
    protected $dates = ['deleted_at'];
}
