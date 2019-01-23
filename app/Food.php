<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
      protected $fillable = [
        'food_name','price','photo'
     ];

    public function menu()
    {
    	return $this->belongsTo('App\menu');
    }
}
