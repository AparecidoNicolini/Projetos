<?php 
	
	$dsn = "mysql:dbname=blog;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";

	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);
		echo "Conexão realizada com sucesso!!! </br>";
		
		/* Esse codigo é de filtro para busca no BD

		$sql = "SELECT * FROM usuario";
		$sql = $pdo->query($sql);

		if($sql->rowCount() > 0) {
			foreach ($sql->fetchAll() as $usuario) {
				echo $usuario["nome"]." - ".$usuario["senha"];
			}
		} 

		else {
			echo "não há usuarios a serem mostrados!!! ";
		} */

		//----------------------------------------------------------------------------------------------------------

		/* Inclusao de dados
		$nome = "Algodao";
		$senha = md5('algodao');

		$sql ="INSERT INTO usuario SET nome='$nome', senha='$senha'";
		$sql = $pdo->query($sql);

		echo "Usuario inserido: " .$pdo->lastInsertId();

		-------------------------------------------------------------------------------------------------------------
		*/
		/* Atualizando dados de usuario
		$sql = "UPDATE usuario SET nome = 'Algodao' WHERE id = 3";
		$sql = $pdo->query($sql);

		echo "Usuario alterado com sucesso!";
		--------------------------------------------------------------------------------------------------------------
		*/
		/* Deletando dados
		$sql = "DELETE FROM usuario WHERE nome = "Algodao 2";
		$pdo->query($sql);

		echo "Deletando usuario";

		*/

	} catch(PDOException $erro){
		echo "Falhou a conexão ".$erro->getMessage()."</br>";
	}


 ?>