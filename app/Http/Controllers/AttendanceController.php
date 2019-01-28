<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendance;
use App\Staff;
use Auth;

class AttendanceController extends Controller
{
    public function show(){
    	$staff=Staff::all();
    	return view('attendance.show',compact('staff'));
    }



     



    

}
