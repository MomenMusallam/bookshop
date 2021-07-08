<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use softDeletes ;
    public function book(){
        return $this->hasMany('App\Book');
    }
}
