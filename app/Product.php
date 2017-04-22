<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function area()
     {
         return $this->belongsTo('App\Area');
     }

     public function brand()
     {
        return $this->belongsTo('App\Brand');
     }


}
