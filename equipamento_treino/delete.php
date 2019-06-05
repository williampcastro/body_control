<?php

	/*Conectando com banco de dados*/
	$ds = 'mysql:host=localhost;dbname=bodycontrol';
	$user = 'root';
	$pass = '';
	$db = new PDO($ds, $user, $pass);
	
	/*Pegando o id da URL*/
	$codigo = $_GET['codigo'];
	
	/*SQL para remover registro do BD*/
	$query = 'DELETE FROM fichaequipamentodetreino WHERE codigo=?';
	$stm = $db->prepare($query);
	$stm->bindParam(1, $codigo);
	 /*Executando o SQL para remo��o*/
	 if($stm->execute()){
	 	
		header("location:pesquisa.php");
	 } 
	 print"<h3>Erro ao remover Fichas de Equipamentos de Treino</h3>";
	
?>