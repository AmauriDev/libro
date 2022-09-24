<?php 

//Editoria.php
include('funciones.php');
$con =  coneccion();
$db = 'book';
@mysqli_select_db($con, $db);

// Obtener datos del formulario 
$nombre = $_POST['nombre'];
$web = $_POST['web'];

// hacemos consulta 
$insert = "INSERT INTO editorial VALUES ('', '$nombre', '$web')";
$result = mysqli_query($con, $insert);
if($result){
	echo 'Se guardo correctamente';
}else{
	echo 'Hubo un error'.mysqli_error();
	mysqli_close($con);
}

?>