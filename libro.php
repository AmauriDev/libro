﻿<!DOCTYPE html>
<html lang="es-LA">
<meta charset="UTF-8">
<head>
	<title>Agregar libros</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="author" content="Amauri">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/section.css">
	<link rel="stylesheet" href="css/form.css">
	<link rel="stylesheet" href="css/nav.css">
</head>
<body>
	<section class="app">
		<nav class="nav">
			<ul class="list">
				<li class="list_items"><a href="autor.html">Agregar autor</a></li>
				<li class="list_items"><a href="editorial.html">Agregar editorial</a></li>
				<li class="list_items"><a href="index.html">Agregar libros</a></li>
			</ul>
		</nav>
		<article>
			<h1>Agregar libros</h1>
			<form class="form">
				<label>Titulo</label>
				<input type="text" name="titulo" id="titutlo"/>
				<label>Autor</label>
				<select name="autor" id="autor">
					<?php 
						include('php/funciones.php'); 

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
						}
					?>
				</select>
				<label>Editorial</label>
				<select name="editorial" id="editorial">
					<option>Ninguno</option>
					<option>Willey</option>
					<option>Pearson</option>
					<option>Course Technology</option>
					<option>Peachpit press</option>
				</select>
				<label>ISBN</label>
				<input type="text" name="isbn" id="isbn" />
				<label>Descripcion</label>
				<textarea name="descripcion" id="descripcion"></textarea>
				<label>Capitulos</label>
				<input type="number" name="capitulo" id="capitulo"/>
				<label>Paginas</label>
				<input type="number" name="paginas" id="paginas"/>
				<label>Cover</label>
				<input type="file">
				<label>Categoria</label>
				<select multiple="multple" name="categorias" id="categorias">
					<option>Web Development</option>
					<option>Programming</option>
					<option>Web Design</option>
				</select>
				<label>Tipo de texto</label>
				<input type="text" name="tipodetexto" id="tipodetexto"/>
				<label>Fecha de publicacion</label>
				<input type="text" name="fechadepublicacion" id="fechadepublicacion"/>
				<input type="submit" value="Enviar" />
			</form>
		</article>
	</section>
</body>
</html>