// Extends the main.blade.php view 
@extends('crud.main')
   
@section('main-content')
   
   <div class="container">
  <div class="jumbotron">
    <h1>Laravel Simple CRUD Operation</h1>
    <p>Laravel Simple CRUD Operations With Student Data.</p>
  </div>
     @if(Session::has('message'))
     <p class="alert alert-success">{{ Session::get('message') }}</p>
     @endif
 <div class="panel panel-primary">
      <div class="panel-heading">
	<a href="{{ route('laravel-simple-crud.create') }}" data-toggle="modal" data-target="#addModal" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-plus"></i> Add New</a>
      </div>
      <div class="panel-body">
	 	<table class="table table-hover table-bordered table-stripped">
	 		<thead>
	 			<tr>
	 			<th>S.N</th>
	 			<th>Name</th>
	 			<th>Roll No.</th>
	 			<th>Phone</th>
	 			<th>Email</th>
	 			<th>Address</th>
	 			<th style="width:200px;">Action</th>
	 			</tr>
	 		</thead>
	 		<tbody>
	 		    @foreach ($students as $student)
	 			<tr>
	 			<td>{{ $loop->index+1 }}</td>
	 			<td>{{ $student->name }}</td>
	 			<td>{{ $student->roll }}</td>
	 			<td>{{ $student->phone }}</td>
	 			<td>{{ $student->email }}</td>
	 			<td>{{ $student->address }}</td>
	 			<td>
	 		<form  method="post" action="{{ route('laravel-simple-crud.destroy',$student->id) }}" class="delete_form">
                	        {{ csrf_field() }}
                		{{ method_field('DELETE') }}
                		<a href="{{ route('laravel-simple-crud.edit',$student->id) }}" class="btn btn-xs btn-primary">Edit</a>
                		
	 			<a href="{{ route('laravel-simple-crud.show',$student->id) }}" class="btn btn-xs btn-success">View</a>

                        <button class="btn btn-xs btn-danger" type="submit" onclick="return confirm('Are You Sure? Want to Delete It.');">Delete</button>
                	</form>
	 		</td>
	 		</tr>
	 		@endforeach
	 		</tbody>
	 	</table>
	 	<p class="pull-right">
	 	{{ $students->links() }}
	 	</p>
   	  </div>
    </div>
</div>
    
@endsection