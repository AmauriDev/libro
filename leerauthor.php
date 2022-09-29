<?php
include('php/funciones.php');
error_reporting(E_ALL);
leerAuthor();
mysqli_free_result($result);
mysqli_close($con);
if(isset($con)){
	unset($con);
}

?>