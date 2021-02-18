function trocarDiv(nome,) {
	var area = document.getElementById("area1");
	var texto = prompt('Qual é seu sobrenome?');
	var idade = prompt('Qual a sua idade ?');

	area.innerHTML = nome+" "+texto+" e tem "+idade+" anos";
}

