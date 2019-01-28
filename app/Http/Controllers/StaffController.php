<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use \Auth;

class StaffController extends Controller
{
     public function insert(){
     	return view('staff.insert');
     }

     public function add(Request $request){
     	$this->validate(
     		$request,[
     			'name'=>'required',
     			'father_name'=>'required',
     			'address'=>'required',
     			'age'=>'required',
     			'salary'=>'required',
     			'phone'=>'required',
     			'photo'=>'required',
     		]

     	);

     	$staff=new Staff();
        $staff->id=$request->id;
     	$staff->name=$request->name;
     	$staff->father_name=$request->father_name;
     	$staff->address=$request->address;
     	$staff->age=$request->age;
     	$staff->salary=$request->salary;
     	$staff->phone=$request->phone;
     	$photoDBPath="";
  $file = $request->photo;
       
        if($file){
             $fileExtension = $file->getClientOriginalExtension();  
            $photoDBPath = "/files/food/photos/".time().'.'.$fileExtension;
            $file->move(public_path("/files/food/photos/"), $photoDBPath);
 
        }
        $staff->photo=$photoDBPath;

        $staff->save();

        return back()->with(['success'=>'staff registerd suuccessfully']);


     }

      public function show(){
        $staff= Staff::all();
        return view('staff.show',compact('staff'));
      }

      public function edit($id){
        $staff=Staff::findOrFail($id);
        return view('staff.edit',compact('staff'));


      }

      public function  update(Request $request,$id){

        $staff=Staff::findOrFail($id);
    
        $staff->name= $request->name;
        $staff->father_name= $request->father_name;
        $staff->address= $request->address;
        $staff->age= $request->age;
        $staff->salary= $request->salary;
        $staff->phone= $request->phone;
    

        $photoDBPath="";
          $file = $request->photo;
               
                if($file){
                     $fileExtension = $file->getClientOriginalExtension();  
                    $photoDBPath = "/files/food/photos/".time().'.'.$fileExtension;
                    $file->move(public_path("/files/food/photos/"), $photoDBPath);
                   
                }

        // $file = time().'-'.$request->photo;
        $staff->photo =  $photoDBPath;

        $staff->save();

    return redirect()->route('staff.show')->with(['success'=>'staff edited suuccessfully']);


}     
  
   public function delete($id){

    $staff=Staff::findOrFail($id);

    $staff->delete();

   }
}
