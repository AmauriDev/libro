<!DOCTYPE html>
<html>
<head>
	<title>GET ISBN</title>
</head>
<body>
<style>
.warning{
	color:red;
	font-weight:bold;
}
.available{
	color:green;
	
}
</style>
<?php 
//validar si un ISBN existe en la base de datos 
include('funciones.php');

// hacemos una coneccion 
$con = coneccion();
$db = 'book';
$isbn = $_GET['isbn'];
//seleccionamos la base de datos
seleccionar_db($con, $db) OR die('No se pudo seleccionar');
$query = "SELECT book_isbn FROM books WHERE (book_isbn = '$isbn')";
$send = mysqli_query($con, $query);
if(mysqli_num_rows($send) == 1){
	echo "<p class=\"warning\">Este ISBN ya existe</p>";
}else{
	echo "<p class=\"available\">Disponible</p>";
}


?>
</body>
</html>

