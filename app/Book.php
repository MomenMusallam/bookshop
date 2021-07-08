<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use softDeletes;

    public function author(){
        return $this->belongsTo('App\Author');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function publishingHouse(){
        return $this->belongsTo('App\PublishingHouse' , 'Phouse_id' , 'id');
    }

}
