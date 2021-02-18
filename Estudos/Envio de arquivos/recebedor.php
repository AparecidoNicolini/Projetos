<pre>
<?php 
if (isset($_FILES['arquivos'])) {
	if(count($_FILES['arquivos']['tmp_name'])>0) {
		for($q=0;$q<count($_FILES['arquivos'] ['tmp_name']);$q++) {
			$nomedoarquivo = md5($_FILES['arquivos']['name'].time().rand(0,99).'jpg');
			move_uploaded_file($_FILES['arquivo']['tmp_name'][$q], 'arquivos/'.$nomedoarquivo);
		}
	}

	//envio de 1 unico arquivo
	//$nome = $_FILES['arquivos'] ['name']; //arquivo.png

	//envio de multiplos arquivos
	//$nome = $_FILES['arquivos'] ['name']; //array
}
print_r($_FILES);

?>
</pre>