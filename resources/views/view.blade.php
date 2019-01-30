<!DOCTYPE html>
<html>
<head>
<title> Datatables Export </title>

       <link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.cssrel" >    
      <link rel="stylesheet" type="text/css" href="  https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.cssrel">
	   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
        <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
       
	  </head>
<body>
 <div class="container">
               <h2>Laravel DataTables </h2>
<table id="table" class="display nowrap" style="width:100%">      
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th> 
        </tr>
      </thead>
	   </div>
      <tbody>
        @foreach($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
	 <script  src="https://code.jquery.com/jquery-3.3.1.js"></script>
     <script  src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
     <script  src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
     <script  src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
     <script  src=" https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
     <script  src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
     <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
     <script  src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>	  
 	<script type="text/javascript">
	 $('#table').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
	</script>
	</body>
	</html>