// Obtener datos desde la base de datos usando ajax 
var xhr = new Array(1);
function getDataFromDB(eID){
	if(!xhr[0]){
		xhr[0] = new XMLHttpRequest();
	}
	var element = document.getElementBy(eID);
	xhr[0].open('GET', 'leerauthor.php', true);
	xhr[0].onreadystatechange = function(){
		if(xhr[0].status === 200 && xhr.readyState === 4){
			element.innerHTML = xhr[0].responseText;
		}
	}
	xhr[0].send(null);
}
