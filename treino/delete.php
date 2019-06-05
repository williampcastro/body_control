<?php

	/*Conectando com banco de dados*/
	$ds = 'mysql:host=localhost;dbname=bodycontrol';
	$user = 'root';
	$pass = '';
	$db = new PDO($ds, $user, $pass);
	
	/*Pegando o id da URL*/
	$codigoFicha = $_GET['codigoFicha'];
	
	/*SQL para remover registro do BD*/
	$query = 'DELETE FROM fichasdetreino WHERE codigoFicha=?';
	$stm = $db->prepare($query);
	$stm->bindParam(1, $codigoFicha);
	 /*Executando o SQL para remo��o*/
	 if($stm->execute()){
	 	
		header("location:pesquisa.php");
	 } 
	 print"<h3>Erro ao remover Ficha de Treino</h3>";
	
?>