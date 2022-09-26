<?php 
include('funciones.php');
$con = coneccion();
$db = 'book';
mysqli_select_db($con, $db);
$select = "SELECT book_title, author_name, editorial_name, editorial_web FROM books, author, editorial WHERE books.autor_id = author.author_id AND books.editorial_id = editorial.editorial_id";
$query = mysqli_query($con, $select);
if($query){
	$num = mysqli_num_rows($query);
	if($num >= 1){
		while($row = mysqli_fetch_assoc($query)){
			echo '<b>Titulo</b> '.$row['book_title'].' <b>Autor</b> '.$row['author_name'].
			' <b>Editorial</b> <a href=\''.$row['editorial_web'].'\'>'. $row['editorial_name'].'</a></br>';
		}
	}else{
		echo 'No hay resultados';
	}
}else{
	echo 'Consulta no enviada';
}
?>
