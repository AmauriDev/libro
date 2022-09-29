// Obtener datos desde la base de datos usando ajax 

function getAuthor(eID, url){
	var author = null;
	if(!author){
		author = new XMLHttpRequest();
	}
	var element = document.getElementById(eID);
	author.open('GET', url, true);
	author.onreadystatechange = function(){
		if(author.status === 200 && author.readyState === 4){
			element.innerHTML = author.responseText;
		}
	}
	author.send(null);
}

function getEditorial(eID, url){
	var editorial = null;
	if(!editorial){
		editorial = new XMLHttpRequest();
	}
	var element = document.getElementById(eID);
	editorial.open('GET', url, true);
	editorial.onreadystatechange = function(){
		if(editorial.status === 200 && editorial.readyState === 4){
			element.innerHTML = editorial.responseText;
		}
	}
	editorial.send(null);
}

function getISBN(eID, url){
	var isbn = null;
	if(!isbn){
		isbn = new XMLHttpRequest();
	}
	var element = document.getElementById(eID);
	isbn.open('GET', url, true);
	isbn.onreadystatechange = function(){
		if(isbn.status === 200 && isbn.readyState === 4){
			element.innerHTML = isbn.responseText;
		}
	}
	isbn.send(null);
}


