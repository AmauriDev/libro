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
				<li class="list_items"><a href="libro.php">Agregar libros</a></li>
				<li class="list_items"><a href="php/verlibros.php">Ver libros</a></li>
				<li class="list_items"><a href="php/notificacion.php">mysqli_affected_rows()</a></li>
			</ul>
		</nav>
		<article>
			<h1>Agregar libros</h1>
			<form class="form" method="post" action="php/ver.php" target="_blank" enctype="multipart/form-data">
				<label>Titulo</label>
				<input type="text" name="titulo" id="titutlo"/>
				<label>Autor</label>
				<select name="autor" id="author">
					<!--<script src="js/getauthor.js"></script>--><!-- Remplazado-->				
				</select>
				<label>Editorial</label>
				<select name="editorial" id="editorial">
					<!--<script src="js/geteditorial.js"></script>--><!-- Remplazado-->
				</select>
				<label>ISBN</label>
				<input type="text" name="isbn" id="isbn" />
				<div id="warningIsbn"></div>
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
	<script src="js/getdatafromdb.js"></script>
	<script>
	getAuthor('author', 'leerauthor.php');
	getEditorial('editorial', 'leereditorial.php');
	var author = document.getElementById('author');
	var editorial = document.getElementById('editorial');
	var isbn = document.getElementById('isbn');
	isbn.addEventListener('blur', function(){
		getISBN('warningIsbn', 'php/isbn.php?isbn='+isbn.value);
	}, false);
	
	
	
	/*author.addEventListener('click', function(){
		getDataFromDB('author', 'leerauthor.php');
	}, false);
	
	/*
	editorial.addEventListener('click', function(){
		getDataFromDB('editorial', 'leereditorial.php');
	}, false);*/
	</script>
</body>
</html>