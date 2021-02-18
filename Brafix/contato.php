<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Brafix - O seu distribuidor Loctite</title>
</head>

<body>
<?

$nome=$_POST['nome'];

$email=$_POST['email'];

$titulo=$_POST['empresa'];

$texto=$_POST['texto'];


$Destinatario="brafix@brafix.com.br, aparecido@brafix.com.br";


$Titulo="$titulo";


$mensagem1="

Uma mensagem vinda do site !

Algum vistante mandou essa mensagem pelo site.

Nome: $nome

Email: $email

Mensagem: $texto";


mail("$Destinatario","$Titulo", "$mensagem1","From:$email");

?>

<html>
<head>
	<title>Brafix - O seu distribuidor Loctite</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<meta charset="utf-8">

	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76150453-1', 'auto');
  ga('send', 'pageview');

</script>
	
</head>
<body>

	<div class="body">
		
	</div>
	<div class="body1">
		<div class="menu">
			<div class="logo">
				<img src="assets/img/logo.png">
			</div>
			
			<div class="menuright">
				<nav id="topo" class="menutopo">
					<ul>
						<div class="hex">
							<div class="hexdown">
								<a href="index.html" class="menucurto">	<li>	Inicio	</li> </a>	
							</div>
							<div class="hexup">
									<a href="produtos.html" class="menucurto2"> <li>	Produtos	</li>	</a>
							</div>
							<div class="hexdown">
									<a href="quemsomos.html" class="menulongo"> <li>	Quem Somos	</li>	</a>
							</div>
							<div class="hexup">
									<a href="faleconosco.html" class="menulongo"> <li>	Fale Conosco	</li>	</a>
							</div>
						</div>
					</ul>
				</nav>
			</div>
		</div>

		<div class="logomenu">
		<img src="assets/img/slogan.png">		
		</div>

	<div class="centro2">
		

<div class="confirmacao">
	<h1> Mensagem enviada com sucesso! </h1>
	<h2> Em breve nossa equipe entrará em contato! </h2>

</div>


	</div>
	<footer> Rua Clélia, 493, Lapa, São Paulo - SP - Tel:(11) 3864-3955 / (11) 3866-3955 - vendas@brandassi.com.br - www.brandassi.com.br	
	</footer>

</body>
</html>