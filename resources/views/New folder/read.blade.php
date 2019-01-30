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
      	View Student Details
      </div>
      <div class="panel-body">
			  <div class="row">
			  	<div class="col-md-4">
			  	<div class="form-group">
				    <label for="roll">Roll Number</label>
				    <input type="text" disabled value="{{ $student->roll }}" class="form-control" placeholder="Roll Number" name="roll" id="email">
				 </div>
			  	</div>
			  	<div class="col-md-8">
			  	<div class="form-group">
				    <label for="roll">Student Name</label>
				    <input type="text" disabled value="{{ $student->name }}" class="form-control" placeholder="Student Name" name="name" id="name">
				 </div>
			  	</div>
			  	<div class="col-md-6">
			  	<div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" disabled value="{{ $student->email }}" class="form-control" placeholder="Email" name="email" id="email">
				 </div>
			  	</div>
			  	<div class="col-md-6">
			  	<div class="form-group">
				    <label for="phone">Phone</label>
				    <input type="text" disabled value="{{ $student->phone }}" class="form-control" placeholder="Phone" name="phone" id="phone">
				 </div>
			  	</div>
			        <div class="col-md-12">
			  	<div class="form-group">
				    <label for="address">Address</label>
				    <input type="text" disabled value="{{ $student->address }}" class="form-control" placeholder="Address" name="address" id="address">
				 </div>
			  	</div>
			  </div>
			  <a href="{{ route('laravel-simple-crud.index') }}" class="btn btn-danger">Back</a>
   	  </div>
    </div>
</div>
    
@endsection