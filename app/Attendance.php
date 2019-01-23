<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
      protected $fillable = [
        'staff_id','date','attendance',
     ];

    public function staff()
    {
    	return $this->hasMany('App\staff');
    }
}
