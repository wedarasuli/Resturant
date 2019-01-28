<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use \Auth;

class FoodController extends Controller

{
	public function insert(){
		return view('food.insert');
	}

	 public function add(Request $request){
	 	$this->validate(
         $request,[
         
         	'name'=>'required',
         	'price'=>'required',
         	'photo'=>'required',


         ]
	 	);

	     $food=new Food();
	 	 $food->id=$request->id;
	 	 $food->food_name=$request->name;
	 	 $food->price=$request->price;
	 	 $photoDBPath="";
         $file = $request->photo;
       
        if($file){
             $fileExtension = $file->getClientOriginalExtension();  
            $photoDBPath = "/files/food/photos/".time().'.'.$fileExtension;
            $file->move(public_path("/files/food/photos/"), $photoDBPath);
 
        }
        $food->photo=$photoDBPath;
        $food->save();
        return back()->with(['success'=>'food added suuccessfully']);
	 }
      
      public function show(){
       $food=Food::all();
       return view('food.show',compact('food'));
      }


      public function edit($id){
      	$food=Food::findOrFail($id);
      	return view('food.edit',compact('food'));

      }

       public function update(Request $request,$id){

       	$food=Food::findOrFail($id);
       	 $food->food_name=$request->name;
       	 $food->price=$request->price;
       	  $photoDBPath="";
          $file = $request->photo;
               
                if($file){
                     $fileExtension = $file->getClientOriginalExtension();  
                    $photoDBPath = "/files/food/photos/".time().'.'.$fileExtension;
                    $file->move(public_path("/files/food/photos/"), $photoDBPath);
                   
                }

        // $file = time().'-'.$request->photo;
        $food->photo =  $photoDBPath;
            $food->save();

    return redirect()->route('food.show')->with(['success'=>'food edited suuccessfully']);


       }
        public function delete($id){
          $food=Food::findOrFail($id);
          $food->delete();

        }
       
}
