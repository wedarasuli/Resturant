<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/main', 'LoginController@index');
Route::post('/main/checklogin', 'LoginController@checklogin');
Route::get('main/successlogin', 'LoginController@successlogin');
Route::get('main/logout', 'LoginController@logout');

  //  staff
  // insert staff

  Route::get('staff/register',[
        'uses'=>'StaffController@insert',
        'as'=>'staff.insert',
        ]);

  // add staff into db

   Route::post('staff/add',[
        'uses'=>'StaffController@add',
        'as'=>'staff.add',
        ]);

   // show staff

   Route::get('staff/show',[
        'uses'=>'StaffController@show',
        'as'=>'staff.show',
        ]);

   // edit staff page
    
     Route::get('staff/edit/{id}',[
        'uses'=>'StaffController@edit',
        'as'=>'staff.edit',
        ]);

     // update staff

      Route::post('staff/update/{id}',[
        'uses'=>'StaffController@update',
        'as'=>'staff.update',
        ]);

      // delete staff

        Route::get('staff/delete/{id}',[
        'uses'=>'StaffController@delete',
        'as'=>'staff.delete',
        ]);


       //Food

    // insert food
        Route::get('food/insert',[
      'uses'=>'FoodController@insert',
      'as'=>'food.insert',
      ]);


    // add food
        Route::post('food/add',[
      'uses'=>'FoodController@add',
      'as'=>'food.add',
      ]);

     // show food
       Route::get('food/show',[
      'uses'=>'FoodController@show',
      'as'=>'food.show',
      ]);

   // edit food
       Route::get('food/edit/{id}',[
      'uses'=>'FoodController@edit',
      'as'=>'food.edit',
      ]);

      // update food
        Route::post('food/update/{id}',[
      'uses'=>'FoodController@update',
      'as'=>'food.update',
      ]);


      // delete food
       Route::get('food/delete/{id}',[
      'uses'=>'FoodController@delete',
      'as'=>'food.delete',
      ]);

     
      // Attendace
    
      // attendance daily
       Route::get('staff/attendance',[
      'uses'=>'AttendanceController@show',
      'as'=>'attendance.show',
      ]);






