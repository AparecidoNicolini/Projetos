<?php 
require 'conexaobd.php';
if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));

	$sql = "INSERT INTO usuario SET nome = '$nome', email = '$email', senha = '$senha'";
	$pdo->query($sql);

	header("Location: primeirosistemasimples.php");
}

?>


<form method="POST">
	Nome: <br/>
	<input type="text" name="nome"/><br/><br/>
	Email: <br/>
	<input type="text" name="email"/><br/><br/>
	Senha: <br/>
	<input type="password" name="senha"/><br/><br/>

	<input type="submit" value="Cadastrar" />

</form>