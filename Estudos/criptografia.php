<?php 

/*$nome = "Aparecido";
$nome2 = md5("Aparecido");

echo $nome."</br>";
echo $nome2;*/

$nome = "Aparecido";
$nome2 = base64_decode("Aparecido");

echo $nome."</br>";
echo $nome2;


?>