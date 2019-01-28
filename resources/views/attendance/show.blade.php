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
                        <a href="https://wrappixel.com/templates/materialpro/" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Upgrade to Pro</a>
                    </div>
                </div>
              


  <div class="row">
         
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                 <form action="{{route('staff.add')}}" enctype="multipart/form-data" method="post">
                                       {{ csrf_field() }}
                                   

                                           <table class="table align-items-center  table-flush table-bordred">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID </th>
                    <th scope="col">Photo</th>
                    <th scope="col">Name </th>
                    <th scope="col">FatherName</th>
                    <th scope="col">Date</th>
                    <th scope="col">Attendance</th>
                  
                  </tr>
                </thead>
                <tbody>
                </tr>
   @foreach ($staff as $staffs)
    

                          <tr>
        
                            <td>{{$staffs->id}}</td>
                            <td><img  height="100px" width="150px" src="{{asset($staffs->photo)}}" alt=""></td>
                            <td>{{$staffs->name}}</td>
                            <td>{{$staffs->father_name}}</td>
                            <td>{{$staffs->date}}</td>


                             <td>
                               <div class="radio">
                            
                                <label class="radio-inline"><input type="radio" name="false" checked>Absent</label> </div>
                                <div class="radio">
                                <label class="radio-inline"><input type="radio" name="true">Present</label></div>
                          
                             </td>
                          </tr>


          
        @endforeach
                
                
                </tbody>
              </table>

                               
                                    </form>


                            </div>
                        </div>
                    </div>
                </div>
  
@stop