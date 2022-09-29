// Obtener datos desde la base de datos usando ajax 
;
function getAuthor(eID){
	if(!xhr[2]){
		xhr[2] = new XMLHttpRequest();
	}
	var element = document.getElementBy(eID);
	xhr[2].open('GET', 'leerauthor.php', true);
	xhr[2].onreadystatechange = function(){
		if(xhr[2].status === 200 && xhr.readyState === 4){
			element.innerHTML = xhr[2].responseText;
		}
	}
	xhr[2].send(null);
}

