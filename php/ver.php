<!DOCTYPE html>
<html>
<head>
	<title>Ver datos de libros</title>
</head>
<body>
	<h1>Los datos que viene desde el servidor</h1>
	<?php
	@include('funciones.php'); 
	$titulo = $_POST['titulo'];
	$autor = $_POST['autor']; // selector
	$editorial = $_POST['editorial']; // selector
	$isbn = $_POST['isbn'];
	$descripcion = addslashes($_POST['descripcion']); //textarea
	$capitulos = $_POST['capitulos']; // Numeros
	$paginas = $_POST['paginas'];
	$cover = $_FILE['cover'];
	$categorias = $_POST['categorias']; // selector multiple 
	$tipodetexto = $_POST['tipodetexto'];
	$fechadepublicacion = $_POST['fechadepublicacion'];

	$con = coneccion();
	mysqli_select_db($con, 'book');
	// insertar datos a la table libros 
	$insert = "INSERT INTO books VALUES ('', '$autor', '$editorial', '$titulo', '$isbn', '$descripcion', '$capitulos', '$paginas', '$cover', '$tipodetexto', '$fechadepublicacion')";
	$inserted =  mysqli_query($con, $insert);
	if($inserted){
		echo 'Se guardaron correctamente';
	}else{
		echo 'No se pudo guardar '.mysqli_error();
	}
	?>
</body>
</html>
