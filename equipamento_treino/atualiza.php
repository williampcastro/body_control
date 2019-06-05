<?php

	/*Pegando os dados do formulário*/
	$codigoFicha = $_POST ['codigoFicha'];
	$codigoEquipamento = $_POST ['codigoEquipamento'];
	
	/*Conexão*/
	$ds = 'mysql:host=localhost;dbname=bodycontrol';
	$user = 'root';
	$pass = '';
	$db = new PDO($ds, $user, $pass);
	
	/* SQL para atualização do registro */
	$query = "UPDATE fichaequipamentodetreino SET codigoFicha=?, codigoEquipamento=? WHERE codigo=?";
	$stm = $db->prepare($query);
	$stm ->bindParam (1, $codigoFicha);
	$stm ->bindParam (2, $codigoEquipamento);
	$stm ->bindParam (3, $codigo);
		
	/*Executando SQL de atualização*/
	if($stm->execute()){
		header("location:pesquisa.php");
	}
	print "<h3>Erro ao ataulizar</h3>"
	
?>