<!DOCTYPE html>
<html>
<head>
	<title>Ver lista de libros</title>
</head>
<body>
<style>
*
{
padding:0; margin:0;
}
.book{
	width:220px;
	display:inline-block;
	padding:5px 5px;
	margin:0px 5px;
	
	
}
#wrapper{
	margin: auto;
	width:960px;
	overflow:hidden;
}
.title, .description{
width:100%;
float:left;
}
.img{
	width:100%;
	display:block;
}
</style>
<div id="wrapper">
	<nav>
		<ul>
			<li>Autores</li>
			<li>Libros</li>
			<li>Editorial</li>
			<li><a href="../libro.php">Volver a libros</a></li>
		</ul>
	</nav>
<?php 
include('funciones.php');
$con = coneccion();
$db = 'book';
mysqli_select_db($con, $db);
$select = "SELECT book_title, book_description FROM books, author, editorial WHERE books.autor_id = author.author_id AND books.editorial_id = editorial.editorial_id";
$query = mysqli_query($con, $select);
if($query){
	$num = mysqli_num_rows($query);
	if($num >= 1){
		while($row = mysqli_fetch_assoc($query)){
			echo '<div class=\'book\'>';
			echo '<div class=\'title\'><b>'.$row['book_title'].'</b></div>'; 
			echo '<hr>';
			echo '<img class=\'img\'/ alt=\'si la imagen aqui va una imagen\'>';
			echo '<div class=\'description\'>'.$row['book_description'].'</div>';
			echo '</div>';// div book
		}
	}else{
		echo 'No hay resultados';
	}
}else{
	echo 'Consulta no enviada';
}
?>


</div>
<script>
var imgArray = new Array();
imgArray[0] = 'img2.jpg';
imgArray[1] = 'img3.jpg';
imgArray[2] = 'img1.jpg';
imgArray[3] = 'img6.jpg';
imgArray[4] = 'img4.jpg';
imgArray[5] = 'img7.jpg';
imgArray[6] = 'img8.jpg';
imgArray[7] = 'img9.jpg';

var imgs = document.querySelectorAll('.img');
var imgLenght, i;
i = null;
imgLenght = imgs.length;
for(i = 0; i <= imgLenght; i++){
	imgs[i].src = '../img/'+imgArray[i];
}
</script>
</body>
</html>