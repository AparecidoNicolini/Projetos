<?php 
$dsn = "mysql:dbname=blog;host=localhost";
$dbuser="root";
$dbpass="";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
	//echo "Conexão Realizada com sucesso";
}catch (PDOException $erro) {
	echo "Falhou a conexão: ".erro-getMessage();
}

?>