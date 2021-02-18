<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
  <head>
    <title>Nicotec - Desenvolvimento e soluções de informatica</title>
    
<head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
        <meta name="keywords" content="provedor, serviço, servico, hospedagem, site, sistema, analise, desenvolvimento, servidor, nicotec, nicotec.dev, html, css, php, javascript, navegador, internet, loja, virtual, ecommerce,">
        <meta name="author" content="Nicotec">

    <script type="text/javascript">
            var texto = "Nicotec";
        var result;

        var count = 0;
        function digitar() {
        result = document.getElementById("logo");
        window.setTimeout(function() { inserir(texto[count]) }, 200);
        }

        function inserir(letra) {
        result.innerHTML += letra;
        count++;
        if(count < texto.length)
            window.setTimeout(function() { inserir(texto[count]) }, 200);
        }

        window.onload = digitar;
    </script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v4.0&appId=750526905380023&autoLogAppEvents=1"></script>

    <?

$nome=$_POST['nome'];

$email=$_POST['email'];

$titulo=$_POST['empresa'];

$texto=$_POST['texto'];


$Destinatario="suporte@nicotec.dev";


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
            <a href="index.html"><div id="logo"></div></a>
            <div class="menu">
                <a href="index.html"><div class="menu1"><span>Inicio</span></div></a>
                <a href="planos.html"><div class="menu1"><span>Serviços </span></div></a>
                <a href="sobre.html"><div class="menu1"><span>Linguagens </span>  </div></a>
                <a href="contato.html"><div class="menu1"><span>Contato </span>  </div></a>
            </div>          
        </div>   
        <h1 class="desenv">Desenvolvimento e soluções de informatica</h1>

        <div class="body">
            <div class="confirmacao">
                <h1> Mensagem enviada com sucesso! </h1>
                <h2> Em breve eu entrarei em contato! </h2>
                </div>  

        </div>
        
        <footer class="footer">
            <div class="footerleft"><h1>Redes sociais </h1>
            <div class="facebook"><a href="https://www.facebook.com/Nicotec-Desenvolvimento-e-Solu%C3%A7%C3%B5es-de-Informatica-1230415123774516/" target=”_blank”><img src="assets/image/f.jpg"></a></div>
            <div class="instagram"><a href="https://www.instagram.com/nicotecdsi/" target=”_blank”><img src="assets/image/i.jpg"></a></div> 
            <div class="whatsapp"> <a href="https://api.whatsapp.com/send?phone=5511961750177&text=Ola%2C%20seja%20bem%20vindo%20a%20Nicotec%2C%20deixe%20sua%20mensagem%20e%20em%20breve%20entraremos%20em%20contato...%20Obrigado!" target="_blank"><img src="assets/image/w.png"></a> </div>
            
        </div>
            <div class="footeright">Todos os direitos reservados</div>
        </footer>
    </div>    
</body>
</html>   