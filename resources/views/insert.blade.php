<html>
<head>
<title> insert </title>
</head>
<body>
<center>
<form action="/insert" method="post">
<table>
<tr>
{{ csrf_field() }}
<td> firstname :</td>
<td><input type="text" name="firstname"> </td>
</tr>
<tr>
<td> lastname :</td>
<td><input type="text" name="lastname"> </td>
</tr>
<tr>
<td><input type="submit" name="submit" value="add"> </td>
</tr>
</table>
</form>
</center>
</body>
</html>


