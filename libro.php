<!DOCTYPE html>
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
			<form class="form" method="post" action="php/ver.php" target="_blank">
				<label>Titulo</label>
				<input type="text" name="titulo" id="titutlo"/>
				<label>Autor</label>
				<select name="autor" id="autor">
					<?php 
						include('php/funciones.php'); 

						leerAuthor();
					?>
				</select>
				<label>Editorial</label>
				<select name="editorial" id="editorial">
					<?php leerEditorial(); ?>
				</select>
				<label>ISBN</label>
				<input type="text" name="isbn" id="isbn" />
				<label>Descripcion</label>
				<textarea name="descripcion" id="descripcion"></textarea>
				<label>Capitulos</label>
				<input type="number" name="capitulos" id="capitulos"/>
				<label>Paginas</label>
				<input type="number" name="paginas" id="paginas"/>
				<label>Cover</label>
				<input type="file" name="cover" id="cover">
				<label>Categoria</label>
				<select multiple="multple" name="categorias" id="categorias">
					<option>Web Development</option>
					<option>Programming</option>
					<option>Web Design</option>
				</select>
				<label>Tipo de texto</label>
				<input type="text" name="tipodetexto" id="tipodetexto"/>
				<label>Fecha de publicacion</label>
				<input type="date" name="fechadepublicacion" id="fechadepublicacion"/>
				<input type="submit" value="Enviar" />
			</form>
		</article>
	</section>
</body>
</html>