<?php
require 'conexaobd.php';
$id = 0;

if(isset($_GET['id']) && empty($_GET['id']) == false) {
	$id = addslashes($_GET['id']);
}

if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);

	$sql = "UPDATE usuario SET nome = '$nome', email = '$email' WHERE id = '$id'";
	$pdo->query($sql);

		header("Location: primeirosistemasimples.php");
}
	$sql = "SELECT * FROM usuario WHERE id = '$id'";
	$sql = $pdo->query($sql);
	if($sql->rowCount()>0) {
		$dados = $sql->fetch();
	} else {
		header("Location: primeirosistemasimples.php");
	}

	
?> 

<form method="POST">
	Nome: <br/>
	<input type="text" name="nome" value="<?php echo $dados ['nome'] ?>" /><br/><br/>
	Email: <br/>
	<input type="text" name="email" value="<?php echo $dados ['email'] ?>"/><br/><br/>
	

	<input type="submit" value="Alterar" />
</form>