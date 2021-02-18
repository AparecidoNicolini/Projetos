<?php
/*$x = 0;

	while($x <= 10) {
		echo "X é igual a ".$x."</br>";
		$x++;
	}

	for($x = 0; $x < 10; $x++){
		echo "X é igual a ".$x."</br>";
	} */

$nome  = array(
	array("nome" => "Aparecido", "idade" => 26),
	array("nome" => "Bonieky", "idade" => 35),
	array("nome" => "Alessandro", "idade" => 42)	
);
	foreach ($nome as $aluno) {
		echo "Aluno:".$aluno["nome"]." - Idade: ".$aluno["idade"]."</br>";
	}

?>














