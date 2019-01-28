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
                        <a href="{{route('food.insert')}}" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Add New Food</a>
                    </div>
                </div>
              


  <div class="row">
         
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">

                                <table class="table align-items-center  table-flush table-bordred">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">FoodName</th>
                    <th scope="col">price</th>
                    <th scope="col">photo</th>
                    <th scope="col">edit</th>
                    <th scope="col">delete</th>
                    <th scope="col">add To Menu</th>
                  
                  </tr>
                </thead>
                <tbody>
                </tr>
                         @foreach ($food as $foods)
    
       

                          <tr>
                           
                            <td>{{$foods->food_name}}</td>
                            <td>{{$foods->price}}</td>
                            <td><img  height="100px" width="150px" src="{{asset($foods->photo)}}" alt=""></td>
                            <td><a href="{{route('food.edit',$foods->id)}}">Edit</a></td>
                            <td><a href="{{route('food.delete',$foods->id)}}">Delete</a></td>
                           
                          
                            @if($foods->menu)
                            <td>added</td>

                            @else
                            <td><a  class="btn btn-primary" href="">Add</a></td>
                            @endif
               
                          
                         

                            <td><a  class="btn btn-primary">
                          </tr>
          
                      @endforeach
                
                
                </tbody>
              </table>


                             
                              
                            </div>
                        </div>
                    </div>
                </div>
  
@stop