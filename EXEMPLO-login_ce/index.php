<?php
//Inclui o arquivo de verifica��o de sess�o.
include_once("verifica.php");
?>
<html><head><title>P�gina Exemplo</title></head>
<body>
	<?php 
		$usuario = $_SESSION['user'];
		print "<p>Bem vindo, $usuario!"; 
	?>
	<a href='logout.php'>Sair</a>
	<h3>Exemplo de Aplica��o Utilizando Login</h3>
	<p>Este texto s� pode ser visualizado por usu�rios 
		que est�o logados na aplica��o.</p>	
</body>	
</html>