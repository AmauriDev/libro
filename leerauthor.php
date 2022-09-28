<?php
include('php/funciones.php');

leerAuthor();
mysqli_free_result($result);
mysqli_close($con);
if(isset($con)){
	unset($con);
}

?>