<?php

	/*Pegando os dados do formulário*/
	$codigoAluno = $_POST['codigoAluno'];
	$nomeAluno = $_POST ['nomeAluno'];
	$dataInclusaoAluno = $_POST ['dataInclusaoAluno'];
	$telefoneAluno = $_POST ['telefoneAluno'];
	$celularAluno = $_POST ['celularAluno'];
	$emailAluno = $_POST ['emailAluno'];
	$enderecoAluno = $_POST ['enderecoAluno'];
	$complementoAluno = $_POST ['complementoAluno'];
	$bairroAluno = $_POST ['bairroAluno'];
	$cepAluno = $_POST ['cepAluno'];
	$cidadeAluno = $_POST ['cidadeAluno'];
	$estadoAluno = $_POST ['estadoAluno'];
	$cpfAluno = $_POST ['cpfAluno'];
	$rgAluno = $_POST ['rgAluno'];
	$estadoCivilAluno = $_POST ['estadoCivilAluno'];
	$dataNascimentoAluno = $_POST ['dataNascimentoAluno'];
	$nomePaiAluno = $_POST ['nomePaiAluno'];
	$nomeMaeAluno = $_POST ['nomeMaeAluno'];
	$sexoAluno = $_POST ['sexoAluno'];

	/*Conexão*/
	$ds = 'mysql:host=localhost;dbname=bodycontrol';
	$user = 'root';
	$pass = '';
	$db = new PDO($ds, $user, $pass);
	
	/* SQL para atualização do registro */
	$query = "UPDATE aluno SET nomeAluno=?, dataInclusaoAluno=?, telefoneAluno=?, celularAluno=?, emailAluno=?, enderecoAluno=?,  complementoAluno=?, bairroAluno=?, cepAluno=?, cidadeAluno=?, estadoAluno=?, cpfAluno=?, rgAluno=?, estadoCivilAluno=?, dataNascimentoAluno=?, nomePaiAluno=?, nomeMaeAluno=?, sexoAluno=? WHERE codigoAluno=?";
	$stm = $db->prepare($query);
	$stm ->bindParam (1, $nomeAluno);
	$stm ->bindParam (2, $dataInclusaoAluno);
	$stm ->bindParam (3, $telefoneAluno);
	$stm ->bindParam (4, $celularAluno);
	$stm ->bindParam (5, $emailAluno);
	$stm ->bindParam (6, $enderecoAluno);
	$stm ->bindParam (7, $complementoAluno);
	$stm ->bindParam (8, $bairroAluno);
	$stm ->bindParam (9, $cepAluno);
	$stm ->bindParam (10, $cidadeAluno);
	$stm ->bindParam (11, $estadoAluno);
	$stm ->bindParam (12, $cpfAluno);
	$stm ->bindParam (13, $rgAluno);
	$stm ->bindParam (14, $estadoCivilAluno);
	$stm ->bindParam (15, $dataNascimentoAluno);
	$stm ->bindParam (16, $nomePaiAluno);
	$stm ->bindParam (17, $nomeMaeAluno);
	$stm ->bindParam (18, $sexoAluno);
	$stm ->bindParam (19, $codigoAluno);
	
	/*Executando SQL de atualização*/
	if($stm->execute()){
		header("location:pesquisa.php");	
	}
	print "<h3>Erro ao ataulizar</h3>"
	
?>