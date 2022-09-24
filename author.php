<?php
include('funciones.php');
// creamos una coneccion 
$con = coneccion();
$db = 'book';

//Obtenemos los datos del formulario 
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$nacinalidad = $_POST['nacionalidad'];
$profesion = $_POST['profesion'];

//Vamos a crear la oracion de la consulta 
$insert = "INSERT INTO author VALUES ('', '$nombre', '$apellido', '$nacionalidad', '$profesion')";
//Vamos a enviar la consulta 
$inserted = mysqli_query($con, $insert);
if($inserted){
	echo 'Lo datos fueron guardado con exito';
}else
{
	echo 'Error al guardar los datos';
}

?>