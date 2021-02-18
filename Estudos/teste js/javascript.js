function soma(){
var n1 = parseInt(document.getElementById("campo1").value);
var n2 = parseInt(document.getElementById("campo2").value);
var soma = n1 + n2;
alert (soma);

}

function MouseClicado(){
	console.log("Apertou o mouse");
}
function mousesolto(){
	console.log("soltou o mouse");
}
function passarmouser(){
	console.log("Passou o mouse");
}
function mousesaiudaarea(){
	console.log("Mouse saiu do botao");
}
function mexendomouse(){
	console.log("Mexendo o mouse sem sair do botao");
}

function clicou(){
	console.log("Clicou");
}
function botaodireito(){
	console.log("Clicou com o botao direito");
	return false;
}

function cliqueduplo(){
	console.log("Duplo clique");
}