<?php
// Inicia a sess�o.
session_start();

// Pegando os dados de login enviados.
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

/* Conectando com o banco de dados para cadastrar registros */
$datasource = 'mysql:host=localhost;dbname=projetoAcademia';
$user = 'root';
$pass = '';
$db = new PDO($datasource, $user, $pass);
	
$query = "SELECT * FROM usuario WHERE login=? AND pass=?";
$stm = $db->prepare($query);
$stm->bindParam(1, $usuario);
$stm->bindParam(2, $senha);
$stm->execute();

if ($stm -> fetch()) {
	// Login efetuado com sucesso.

	// Armazenando usu�rio na sess�o.
	$_SESSION['user'] = $usuario;
	
	// Redirecionando para a p�gina inicial.
	header("location:cadastro_aluno.php");
} else {
	// Caso usu�rio ou senha estejam incorretos.
	print "<p>Usu�rio e/ou Senha Inv�lidos!</p>";
	print "<a href='index.php'>Voltar</a>";
}
?>
