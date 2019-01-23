<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'food_id',
     ];


    public function food()
    {
    	return $this->hasMany('App\food');
    }
    public function payment()
    {
    	return $this->hasMany('App\Payment');
    }
}
