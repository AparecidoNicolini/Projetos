function apertoutecla(event){
	console.log ("Apertou alguma tecla: "+event.keyCode);
}

function mudouopcaodeestado(objeto) {
	console.log("Selecionou o estado de "+objeto.value);
}

function focou(){
	console.log ("focou no campo");
}
<<<<<<< HEAD

function addbola(){
	var bola = document.createElement("div");
	bola.setAttribute("class", "bola");

	var p1 = Math.floor(Math.random()*500);
	var p2 = Math.floor(Math.random()*400);

	bola.setAttribute("style", "left:"+p1+"px;top:"+p2+"px;");
	bola.setAttribute("onclick", "estourar(this)");

	document.body.appendChild(bola);
}

function  estourar(elemento) {
	document.body.removeChild(elemento);

}
=======
>>>>>>> d6ff405a5dc494b10334cdac7f0da10e0d49dee0
