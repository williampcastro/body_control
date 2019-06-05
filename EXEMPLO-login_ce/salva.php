<?php	
	/* Recebendo os dados do formul�rio */
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	
	/* Conectando com o banco de dados para cadastrar registros */
	$datasource = 'mysql:host=localhost;dbname=projetoAcademia';
	$user = 'root';
	$pass = '';
	$db = new PDO($datasource, $user, $pass);
	
	$query = "INSERT INTO usuario (login,pass) VALUES(?,?)";			
	$stm = $db->prepare($query);
	$stm->bindParam(1, $usuario);
	$stm->bindParam(2, $senha);
		
	if($stm->execute()) {
		print "<p>Cadastro efetuado com sucesso</p>";
		print "<a href='index.php'>Voltar</a>";
	}
	else {
		print "<p>Erro ao cadastrar usu�rio!</p>";
		print "<a href='index.php'>Voltar</a>";
	}	
?>