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
  	     <div class="col-md-2"></div>
                    <div class="col-8">
                        <div class="card">
                            <div class="card-block">
                                <form action="{{route('staff.add')}}" enctype="multipart/form-data" method="post">
                                	   {{ csrf_field() }}
									<div class="form-group">
									<label for="email">Name:</label>
									<input type="text" class="form-control" name="name">
									</div>
									<div class="form-group">
									<label for="email">FatherName:</label>
									<input type="text" class="form-control" name="father_name">
									</div>
									<div class="form-group">
									<label for="email">Address:</label>
									<input type="text" class="form-control" name="address">
									</div>
									<div class="form-group">
									<label for="email">Age:</label>
									<input type="text" class="form-control" name="age">
									</div>
									<div class="form-group">
									<label for="email">Salary:</label>
									<input type="text" class="form-control" name="salary">
									</div>
									<div class="form-group">
									<label for="email">Phone:</label>
									<input type="text" class="form-control" name="phone">
									</div>
									<div class="form-group">
									<label for="email">Photo:</label>
									<input type="file" class="form-control" name="photo">
									</div>
									
									<button type="submit" class="btn btn-primary">Submit</button>
									</form>
                            </div>
                        </div>
                    </div>
                </div>
  
@stop