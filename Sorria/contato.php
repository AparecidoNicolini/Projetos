<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">

<head>
<meta charset="utf-8">
<meta name="keywords" content="sorria, materiais, Odontologico, dentista, equipamentos, asfer, bioservice, caithec, classico, coltene, dencril, dentsply, nova dfl, dfl, dx, fava, fgm, nova gp, gp, kg, sorensen, maquita, dental, medsteril, morelli">
  <meta name="author" content="Nicotec">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Sorria e Sorria</title>
<meta name="robots" content="INDEX,FOLLOW" />
<link rel="icon" href="img/logo.jpg" />
<link rel="shortcut icon" href="img/logo.jpg" />
<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
<link rel="stylesheet" type="text/css" href="assets/css/slide.css" />

	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	
	<link rel="stylesheet" type="text/css" href="engine2/style.css" />
	<script type="text/javascript" src="engine2/jquery.js"></script>
	
<?

$nome=$_POST['nome'];

$email=$_POST['email'];

$titulo=$_POST['empresa'];

$texto=$_POST['texto'];


$Destinatario="dentalsorria@yahoo.com.br";


$Titulo="$titulo";


$mensagem1="

Uma mensagem vinda do site !

Algum vistante mandou essa mensagem pelo site.

Nome: $nome

Email: $email

Mensagem: $texto";


mail("$Destinatario","$Titulo", "$mensagem1","From:$email");

?>




</head>
<body>
	<div class="body">
		<div class="topo">
			<div class="logo">
				<a href="index.html>"><img src="assets/img/logo.png"> </a>
			</div>
			<div class="menutop">
				<ul>
					<div class="menutopo">
					<a href="index.html"><li> inicio </li></a>
					<a href="marcas.html"><li> marcas </li></a>
					<a href="quemsomos.html"><li> quem somos </li></a>
					<a href="contato.html"><li> fale conosco </li></a>
					</div>
				</ul>
			</div>
		</div>

		<div class="confirmacao">
	<h1> Mensagem enviada com sucesso! </h1>
	<h2> Em breve nossa equipe entrará em contato! </h2>

</div>
			
			<footer>
				<p>Sorria & Sorria Comércio de Material Odontologico Ltda - 07.356.403/0001-17 Copyright 2013 - 2018</p>
				<p class="nicotec">Todos os direitos reservados • Desenvolvido por <a href="https://www.nicotec.dev/" target="blank"> Nicotec </a> </p>
			</footer>



	</div>

</body>
</html>