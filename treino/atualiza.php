<?php

	/*Pegando os dados do formulário*/
	$codigoAluno = $_POST ['codigoAluno'];
	$dataInicioTreino = $_POST ['dataInicioTreino'];
	$dataTerminoTreino = $_POST ['dataTerminoTreino'];
	$repeticoes = $_POST ['repeticoes'];
	$series = $_POST ['series'];

	/*Conexão*/
	$ds = 'mysql:host=localhost;dbname=bodycontrol';
	$user = 'root';
	$pass = '';
	$db = new PDO($ds, $user, $pass);
	
	/* SQL para atualização do registro */
	$query = "UPDATE fichasdetreino SET codigoAluno=?, dataInicioTreino=?, dataTerminoTreino=?, repeticoes=?, series=? WHERE codigoFicha=?";
	$stm = $db->prepare($query);
	$stm ->bindParam (1, $codigoAluno);
	$stm ->bindParam (2, $dataInicioTreino);
	$stm ->bindParam (3, $dataTerminoTreino);
	$stm ->bindParam (4, $repeticoes);
	$stm ->bindParam (5, $series);
	$stm ->bindParam (6, $codigoAvaliacaoFisica);
		
	/*Executando SQL de atualização*/
	if($stm->execute()){
		header("location:pesquisa.php");
	}
	print "<h3>Erro ao ataulizar</h3>"
	
?>