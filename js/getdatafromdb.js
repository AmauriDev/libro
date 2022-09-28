// Obtener datos desde la base de datos usando ajax 

function getDataFromDB(eID, url){
	var xhr = new Array(2);
	if(!xhr[0]){
		xhr[0] = new XMLHttpRequest();
	}
	var element = document.getElementById(eID);
	xhr[0].open('GET', url, true);
	xhr[0].onreadystatechange = function(){
		if(xhr[0].status === 200 && xhr[0].readyState === 4){
			element.innerHTML = xhr[0].responseText;
		}
	}
	xhr[0].send(null);
}

