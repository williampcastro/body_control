<?php

	/*Pegando os dados do formulário*/
	$codigoEquipamento = $_POST['codigoEquipamento'];
	$nomeEquipamento = $_POST ['nomeEquipamento'];
	$dataCompra = $_POST ['dataCompra'];

	/*Conexão*/
	$ds = 'mysql:host=localhost;dbname=bodycontrol';
	$user = 'root';
	$pass = '';
	$db = new PDO($ds, $user, $pass);
	
	/* SQL para atualização do registro */
	$query = "UPDATE equipamentos SET nomeEquipamento=?, dataCompra=? WHERE codigoEquipamento=?";
	$stm = $db->prepare($query);
	$stm ->bindParam (1, $nomeEquipamento);
	$stm ->bindParam (2, $dataCompra);
	$stm ->bindParam (3, $codigoEquipamento);
	
	/*Executando SQL de atualização*/
	if($stm->execute()){
		header("location:pesquisa.php");
	}
	print "<h3>Erro ao ataulizar</h3>"
	
?>