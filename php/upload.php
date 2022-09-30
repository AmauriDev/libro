<?php
include('funciones.php');
$con = coneccion();
$db = 'book';
seleccionar_db($con, $db);

$file_name = $_FILES['archivo']['name'];
$file_size = $_FILES['archivo']['size'];
$file_type = $_FILES['archivo']['type'];
$file_tmp = $_FILES['archivo']['tmp_name'];
// creamos un la consulta para insertar datos 
$query = "INSERT INTO files VALUES ('', '$file_name', '$file_type', '$file_size') ";
//Enviamos la peticion a la base de datos 
$send = mysqli_query($con, $query);
if($send){
	move_uploaded_file($file_tmp, "/AppServ/www/img/$file_name");
	echo 'Imagen guardada';
}else{
	echo 'No se guardo la imagen';
}




?>