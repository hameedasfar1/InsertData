// Extends the main.blade.php view 
@extends('crud.main')
   
@section('main-content')
   
   <div class="container">
  <div class="jumbotron">
    <h1>Laravel Simple CRUD Operation</h1>
    <p>Laravel Simple CRUD Operations With Student Data.</p>
  </div>
 <div class="panel panel-success">
      <div class="panel-heading">
      	Edit Student
      </div>
      <div class="panel-body">
      	@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
	 	 <form action="{{ route('laravel-simple-crud.update',$student->id) }}" method="post">
	 	 	{{ csrf_field() }}
	 	 	{{ method_field('PATCH') }}
			  <div class="row">
			  	<div class="col-md-4">
			  	<div class="form-group">
				    <label for="roll">Roll Number</label>
				    <input type="text" value="{{ $student->roll }}" class="form-control" placeholder="Roll Number" name="roll" id="email">
				 </div>
			  	</div>
			  	<div class="col-md-8">
			  	<div class="form-group">
				    <label for="roll">Student Name</label>
				    <input type="text" value="{{ $student->name }}" class="form-control" placeholder="Student Name" name="name" id="name">
				 </div>
			  	</div>
			  	<div class="col-md-6">
			  	<div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" value="{{ $student->email }}" class="form-control" placeholder="Email" name="email" id="email">
				 </div>
			  	</div>
			  	<div class="col-md-6">
			  	<div class="form-group">
				    <label for="phone">Phone</label>
				    <input type="text" value="{{ $student->phone }}" class="form-control" placeholder="Phone" name="phone" id="phone">
				 </div>
			  	</div>
			        <div class="col-md-12">
			  	<div class="form-group">
				    <label for="address">Address</label>
				    <input type="text" value="{{ $student->address }}" class="form-control" placeholder="Address" name="address" id="address">
				 </div>
			  	</div>
			  </div>
			  <button type="submit" class="btn btn-success">Update</button>
			  <a href="{{ route('laravel-simple-crud.index') }}" class="btn btn-danger">Back</a>
			</form> 
   	  </div>
    </div>
</div>
    
@endsection