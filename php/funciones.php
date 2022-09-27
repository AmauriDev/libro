<?php 
include('credenciales.php');

function coneccion()
{
		$con = mysqli_connect(HOST, USER, PASS);
		if($con){
			// si la coneccion es exitosa
			return $con;
		}else{
			echo 'Coneccion fallida';
			mysqli_close($con);
			unset($con);
			return $con;
		}
}

function seleccionar_db($con, $s){
	
	if(empty($s)){
		echo 'No se puede seleccionar una base de dato nulla';
	}
	else{
		$d = trim($s); // Eliminar espacios en blanco.
		$selectdb = mysqli_select_db($con, $d);
		if($selectdb){
			//echo 'Base de datos seleccionada: [\''.$d.'\']';
			return $selectdb;
		}else{
			echo 'Base de datos no seleccionada o no existe\' '.$d.'\'';
			return false;
		}
	}
}

function consulta($db, $sql){
	$con = coneccion(); // Hacemos una coneccion 
	seleccionar_db($con, $db); // Selecciona una base de datos 
	$resultado = mysqli_query($con, $sql); // Enviamos la consulta 
	if($resultado){ // Si la consulta es enviada 
		$num = mysqli_num_rows($resultado); // Almacenamos el numero de coincidencias encontradas 
		if($num >= 1){ // Si hay mas de un resultado 
			//echo 'Hay mas de un resultado';
			$row = mysqli_fetch_array($resultado, MYSQLI_NUM);
			return $row;
		}else{
			//echo 'No hay ningun resultado encontrado en la consulta ';
		}
	}
}

function buscar_usuario($one, $two, $array){
	if(!empty($one)){$nombre = $one;}
	else{$nombre = false;}
	
	if(!empty($two)){$email = $two;}
	else{$email = false;}
	
	if($nombre && $email){ // Si ambos campos estan bien
		if(($nombre == $array[0]) && ($email == $array[1]))  
		{
			// Comparamos los campos introducidos vs los obtenidos de la base de datos
			$valor[0] = true;
			$valor[1] = $array[0];
			$valor[2] = $array[1];
			return $valor;
		}else{
			echo 'Los campos no coinciden';
			return false;
		}
	}
}

function updateContent($db, $sql){
	$con = coneccion(); // Creamos una coneccion
	seleccionar_db($con, $db); // Seleccionamos una base de datos 
	$query = mysqli_query($con, $sql); // Enviamos la consulta que vamos a editar
	if($query){
		echo 'Se ha actualizado el contenido correctamente';
	}else{
		echo 'Lo sentimos hubo un error al actualizar los datos';
		mysqli_close($con);
		unset($con);
	}
}


function query($tb, $field, $content, $where,  $id){
	return $query = "UPDATE ".$tb." SET ".$field." = '$content' WHERE ".$where." = \"$id\"";
}

function leerAuthor(){
	$con = coneccion();
	//Hacemos una consulta 
	$db = 'book';
	mysqli_select_db($con, $db); //Seleccionamo la base de datos
	$query = "SELECT author_id, author_name, author_last_name FROM author";
	$result = mysqli_query($con, $query);
	$num = mysqli_num_rows($result);
	if($num >= 1){
	while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
		echo "<option value=\"$row[0]\">".$row[1].' '.$row[2].'</option>';
		}
	}else{
		echo '<option>No hay autores</option>';
	}
}

function leerEditorial(){
	$con = coneccion();
	mysqli_select_db($con, 'book');
	$select = "SELECT editorial_id, editorial_name FROM editorial";
	$query = mysqli_query($con, $select);
	if($query){
		$num = mysqli_num_rows($query);
		if($query >= 1){
			while($row = mysqli_fetch_array($query, MYSQLI_BOTH)){
				echo "<option value=\"$row[0]\">$row[1]</option>";
			}// end while
		}
		else {echo '<option>No hay editoriales</option>';}
	}else{
		echo 'Consulta error ';
	}
}// end function

?>