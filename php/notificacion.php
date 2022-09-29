<?php 
include('funciones.php');

$con = coneccion();

$db = mysqli_select_db($con, 'book');
echo  @mysqli_affected_rows($db) or die ('Esta funciona ya no es util');

?>