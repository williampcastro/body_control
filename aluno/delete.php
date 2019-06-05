<?php

	/*Conectando com banco de dados*/
	$ds = 'mysql:host=localhost;dbname=bodycontrol';
	$user = 'root';
	$pass = '';
	$db = new PDO($ds, $user, $pass);
	
	/*Pegando o id da URL*/
	$codigoAluno = $_GET['codigoAluno'];
	
	/*SQL para remover registro do BD*/
	$query = 'DELETE FROM aluno WHERE codigoAluno=?';
	$stm = $db->prepare($query);
	$stm->bindParam(1, $codigoAluno);
	 /*Executando o SQL para remo��o*/
	 if($stm->execute()){
	 	
		header("location:pesquisa.php");
	 } 
	 print"<h3>Erro ao remover Aluno</h3>";
	
?>