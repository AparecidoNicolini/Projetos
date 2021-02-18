
function addbola(){
	var bola = document.createElement("div");
	bola.setAttribute("class", "bola");
	var p1 = Math.floor(Math.random() * 1300);
	var p2 = Math.floor(Math.random() * 600);
	var cores = ["red", "blue", "green", "grey", "yellow", "pink", "blue-dark"];
	bola.setAttribute("style", "left:"+p1+"px; top:"+p2+"px;background:"+cores[Math.floor(Math.random() * 7)]+";");
	bola.setAttribute("onclick", "estourar(this)");

	document.body.appendChild(bola);
}

function estourar(elemento) {
	document.body.removeChild(elemento);
}

function iniciar(){
	setInterval(addbola, 0);
}