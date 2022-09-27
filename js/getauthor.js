// Obtener datos desde la base de datos usando ajax 
var author = document.getElementById('autor');
var xhr;
function getAuthor(){
	if(!xhr){
		xhr = new XMLHttpRequest();
	}
	xhr.open('GET', 'leerauthor.php', true);
	xhr.onreadystatechange = function(){
		if(xhr.status === 200 && xhr.readyState === 4){
			author.innerHTML = xhr.responseText;
		}
	}
	xhr.send(null);
}

getAuthor();