<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'name','father_name','address','age','salary','phone','photo',
     ];
}
