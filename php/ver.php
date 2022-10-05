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
	
	$tipodetexto = $_POST['tipodetexto'];
	$fechadepublicacion = $_POST['fechadepublicacion'];
	// guardar el resultado obtenido de la tabla archivos 
	//$id_file = getidfiles();
	//Agregarlo un numero adicional al obtenido de la tabla archivo 
	//$id_file = (int) $id_file[0] + 1; 
	$con = coneccion(); // Creamos una coneccion 
	$db = 'book'; // Nombre de la base e datos 
	seleccionar_db($con, $db);
	
	$root = "/AppServ/www/libros/img/";
	//Obtenemos los datos de archivo 
	$file_name = $_FILES['cover']['name'];
	$file_type = $_FILES['cover']['type'];
	$file_size = $_FILES['cover']['size'];
	$file_tmp  = $_FILES['cover']['tmp_name'];
	
	//insert datos de los archivos 
	$file_insert = "INSERT INTO files VALUES ('', '$file_name', '$file_type', '$file_size')";
	$file_inserted = mysqli_query($con, $file_insert);
	if($file_inserted){
		move_uploaded_file($file_tmp, $root.$file_name);
		$id_files = mysqli_insert_id($con); //Obtengo el ultimo id que introduje en la tabla files 
		if($id_files > 0){ // Si esta variable obtiene un valor mayor a 0 proceder 
		// insertar datos a la table libros 
			$insert = "INSERT INTO books VALUES ('', '$autor', '$editorial', '$titulo', '$isbn', '$descripcion', '$capitulos', '$paginas', '$cover', '$tipodetexto', '$fechadepublicacion', '$id_files')";
			$inserted =  mysqli_query($con, $insert);
			if($inserted){
				echo 'Se guardaron correctamente';
			}else{
				echo 'No se pudo guardar '.mysqli_error();
				}
			}
		}else{
			echo 'Archivo no insertado ';
		}
	
	
	
	?>
</body>
</html>
