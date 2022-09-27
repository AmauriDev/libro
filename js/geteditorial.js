// Obtener datos desde la base de datos usando ajax 
var editorial = document.getElementById('editorial');
var xhrr;
function getEditorial(){
	if(!xhrr){
		xhrr = new XMLHttpRequest();
	}
	xhrr.open('GET', 'leereditorial.php', true);
	xhrr.onreadystatechange = function(){
		if(xhrr.status === 200 && xhrr.readyState === 4){
			editorial.innerHTML = xhrr.responseText;
		}
	}
	xhrr.send(null);
}

getEditorial();