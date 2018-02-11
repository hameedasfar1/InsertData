<html>
<head>
<title> insert </title>
</head>
<body>

<form action="/insert" method="post">
<table>

{{ csrf_field() }}
<h1> Expenses </h1> <br>
<tr>
<td>Date</td>
<td><input type="date" name="Date" ></td>
</tr> 

<tr>
<td>Invoiceno</td>
<td><input type="text"  name="Invoiceno">
</td>
</tr> 

<tr>
<td>Name</td>
<td><input type="text"  name="Name"><br>
</td>
</tr> 

<tr>
<td>Description</td>
<td><input type="text"  name="Description">
</td>
</tr> 

<tr>
<td>Attachment</td>
<td><input type="text" name="Attachment">
</td>
 


</tr> 


<tr>
<td>Store</td>
<td><select>
<option value="value1">value1</option>
<option value="value2">value2</option>
<option value="value3">value3</option>
</select> <br>
</td>
</tr>

<tr>
<td>Expensecatogery</td>
<td><input type="text"  name="Expensecatogery">
</td>
</tr> 

<tr>
<td>Amount</td>
<td><input type="text"  name="Amount">
</td>
</tr> 

<tr>
<td>Location</td>
<td><input type="text"  name="Location">
</td>
</tr> 


<tr>
<td><input type="submit" value ="save">	
</td> 
</tr> 	

</tr>
</table>
</form>



</body>
</html>


