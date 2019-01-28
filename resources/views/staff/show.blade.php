@extends('master')

@section('content')

           <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <a href="{{route('staff.insert')}}" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Register New Staff</a>
                    </div>
                </div>
              


  <div class="row">
  	     
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">

                            	<table class="table align-items-center  table-flush table-bordred">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID </th>
                    <th scope="col">Name </th>
                    <th scope="col">FatherName</th>
                    <th scope="col">Address</th>
                    <th scope="col">Age</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  
                  </tr>
                </thead>
                <tbody>
                </tr>
   @foreach ($staff as $staffs)
    

                          <tr>
        
                            <td>{{$staffs->id}}</td>
                            <td>{{$staffs->name}}</td>
                            <td>{{$staffs->father_name}}</td>
                            <td>{{$staffs->address}}</td>
                            <td>{{$staffs->age}}</td>
                            <td>{{$staffs->salary}}</td>
                            <td>{{$staffs->phone}}</td>
                           
                            <td><img  height="100px" width="150px" src="{{asset($staffs->photo)}}" alt=""></td>
                          
                          
                            <td><a href="{{route('staff.edit',$staffs->id)}}">Edit</a></td>
                            <td><a href="{{route('staff.delete',$staffs->id)}}">Delete</a></td>
                           
    
                          </tr>
          
        @endforeach
                
                
                </tbody>
              </table>

                              
                            </div>
                        </div>
                    </div>
                </div>
  
@stop