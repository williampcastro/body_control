<?php

	/*Pegando os dados do formulário*/
	$codigoAluno = $_POST ['codigoAluno'];
	$pesoAluno = $_POST ['pesoAluno'];
	$estaturaAluno = $_POST ['estaturaAluno'];
	$dataAvalicaoAluno = $_POST ['dataAvalicaoAluno'];
	$medidaTorax = $_POST ['medidaTorax'];
	$medidaAbdomen = $_POST ['medidaAbdomen'];
	$medidaAntebraco = $_POST ['medidaAntebraco'];
	$medidaBraco = $_POST ['medidaBraco'];
	$medidaCoxa = $_POST ['medidaCoxa'];
	$medidaPanturrilha = $_POST ['medidaPanturrilha'];	
	$medidaCintura = $_POST ['medidaCintura'];
	$medidaQuadril = $_POST ['medidaQuadril'];
	$medidaDobraCutaneaTorax = $_POST ['medidaDobraCutaneaTorax'];
	$medidaDobraCutaneaAbdomen = $_POST ['medidaDobraCutaneaAbdomen'];
	$medidaDobraCutaneaCoxa = $_POST ['medidaDobraCutaneaCoxa'];
	$medidaDobraCutaneaTriceps = $_POST ['medidaDobraCutaneaTriceps'];
	$medidaDobraCutaneaSupraIliaca = $_POST ['medidaDobraCutaneaSupraIliaca'];
	$porcentagemGorduraAluno = $_POST ['porcentagemGorduraAluno'];
	$pesoMagroAluno = $_POST ['pesoMagroAluno'];
	$pesoGordoAluno= $_POST ['pesoGordoAluno'];
	$pesoDesejavelAluno = $_POST ['pesoDesejavelAluno'];

	/*Conexão*/
	$ds = 'mysql:host=localhost;dbname=bodycontrol';
	$user = 'root';
	$pass = '';
	$db = new PDO($ds, $user, $pass);
	
	/* SQL para atualização do registro */
	$query = "UPDATE avaliacaofisica SET codigoAluno=?, pesoAluno=?, estaturaAluno=?, dataAvalicaoAluno=?, medidaTorax=?, medidaAbdomen=?,  medidaAntebraco=?, medidaBraco=?, medidaCoxa=?, medidaPanturrilha=?, medidaCintura=?, medidaQuadril=?, medidaDobraCutaneaTorax=?, medidaDobraCutaneaAbdomen=?, medidaDobraCutaneaCoxa=?, medidaDobraCutaneaTriceps=?, medidaDobraCutaneaSupraIliaca=?, sexporcentagemGorduraAlunooAluno=?, pesoMagroAluno=?, pesoGordoAluno=?, pesoDesejavelAluno=? WHERE codigoAvaliacaoFisica=?";
	$stm = $db->prepare($query);
	$stm ->bindParam (1, $codigoAluno);
	$stm ->bindParam (2, $pesoAluno);
	$stm ->bindParam (3, $estaturaAluno);
	$stm ->bindParam (4, $dataAvalicaoAluno);
	$stm ->bindParam (5, $medidaTorax);
	$stm ->bindParam (6, $medidaAbdomen);
	$stm ->bindParam (7, $medidaAntebraco);
	$stm ->bindParam (8, $medidaBraco);
	$stm ->bindParam (9, $medidaCoxa);
	$stm ->bindParam (10, $medidaPanturrilha);
	$stm ->bindParam (11, $medidaCintura);
	$stm ->bindParam (12, $medidaQuadril);
	$stm ->bindParam (13, $medidaDobraCutaneaTorax);
	$stm ->bindParam (14, $medidaDobraCutaneaAbdomen);
	$stm ->bindParam (15, $medidaDobraCutaneaCoxa);
	$stm ->bindParam (16, $medidaDobraCutaneaTriceps);
	$stm ->bindParam (17, $medidaDobraCutaneaSupraIliaca);
	$stm ->bindParam (18, $porcentagemGorduraAluno);
	$stm ->bindParam (19, $pesoMagroAluno);
	$stm ->bindParam (20, $pesoGordoAluno);
	$stm ->bindParam (21, $pesoDesejavelAluno);
	$stm ->bindParam (22, $codigoAvaliacaoFisica);
		
	/*Executando SQL de atualização*/
	if($stm->execute()){
		header("location:pesquisa.php");
	}
	print "<h3>Erro ao ataulizar</h3>"
	
?>