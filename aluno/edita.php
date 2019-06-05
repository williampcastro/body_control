
<?php
//Inclui o arquivo de verificação de sessão.
include_once("../verifica.php");
?>

<!DOCTYPE HTML>

<!--
	Strongly Typed 1.0 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
        <link rel="shortcut icon"  href="http://1.bp.blogspot.com/-Pj5INVqG6NM/Tsw0EvoCWRI/AAAAAAAACKY/xn-unRuoDWE/s1600/resource-shared_gif_listing-nz_75048-logo.gif" type="image/x-icon">
		<title>Body Control</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=1040" />
		<link href="../http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600|Arvo:700" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="../js/jquery.min.js"></script>
		<script src="../js/jquery.dropotron.js"></script>
		<script src="../js/config.js"></script>
		<script src="../js/skel.min.js"></script>
		<script src="../js/skel-panels.min.js"></script>
			<link rel="stylesheet" href="../css/skel-noscript.css" />
			<link rel="stylesheet" href="../css/style.css" />
			<link rel="stylesheet" href="../css/style-desktop.css" />
	</head>
	<body class="homepage">

		<!-- Header Wrapper -->
			<div id="header-wrapper">
						
				<!-- Header -->
					<div id="header" class="container">
						
						<!-- Logo -->
							<h1 id="logo"><a href="#">Alterar Aluno</a></h1>
							<p></p>
                            <div class="bv">
<?php 
		$usuario = $_SESSION['user'];
		print "<p>Bem vindo administrador, $usuario!"; 
?>
</br><a href='../logout.php'>Sair</a>
</div>
						
						<!-- Nav -->
							<nav id="nav">
									<ul>
									<li><a class="icon icon-home" href="../index.php"><span>HOME</span></a></li>
									<li>
										<a href="" class="icon icon-bar-chart"><span>CADASTRO</span></a>
										<ul>
											<li><a href="../cadastro_aluno.php">Cadastro do Aluno</a></li>
											<li><a href="../cadastro_equipamentos.php">Cadastro de Equipamentos</a></li>
											<li><a href="../cadastro_af.php">Cadastro da Avaliação Física</a></li>
											<li><a href="../cadastro_treino.php">Cadastro do Treino </a></li>
                                            <li><a href="../cadastro_et.php">Cadastro do Equipamento de Treino </a></li>
										</ul>
									</li>
									<li><a class="icon icon-cog" href="#"><span>ALTERAR</span></a>
                                    <ul>
											<li><a href="pesquisa.php">Aluno</a></li>
											<li><a href="../equipamento/pesquisa.php">Equipamentos</a></li>
											<li><a href="../avaliacao_fisica/pesquisa.php">Avaliação Física</a></li>
											<li><a href="../treino/pesquisa.php">Treino </a></li>
                                            <li><a href="../equipamento_treino/pesquisa.php">Equipamento de Treino </a></li>
										</ul>
                                        </li>
									<li><a class="icon icon-retweet" href="../treinos.php"><span>TREINOS</span></a></li>
									<li><a class="icon icon-sitemap" href="../alunos.php"><span>ALUNOS </span></a></li>
								</ul>
							</nav>

					</div>

			</div>
			
		<!-- Features Wrapper -->
			<div id="features-wrapper">

				<!-- Features -->
					<section id="features" class="container">
                            <div class="pesquisa">
		
       <h2>Pesquisa de Alunos</h2>
       <div class="area_pesquisa">
		<form method="post" action="pesquisa.php">
        	
			<label id='lpesquisa'>Digite o nome do Aluno:</label>
			<input id='ipesquisa' type="text" name="nomeAluno" />
			<button id="submit_pesquisa" class="button" type="submit"></button>
		
		</form>
        </div>
<?php

	/*Pegando dados da URL*/
	$codigoAluno = $_GET['codigoAluno'];
	$nomeAluno = $_GET ['nomeAluno'];
	$dataInclusaoAluno = $_GET ['dataInclusaoAluno'];
	$telefoneAluno = $_GET ['telefoneAluno'];
	$celularAluno = $_GET ['celularAluno'];
	$emailAluno = $_GET ['emailAluno'];
	$enderecoAluno = $_GET ['enderecoAluno'];
	$complementoAluno = $_GET ['complementoAluno'];
	$bairroAluno = $_GET ['bairroAluno'];
	$cepAluno = $_GET ['cepAluno'];
	$cidadeAluno = $_GET ['cidadeAluno'];
	$estadoAluno = $_GET ['estadoAluno'];
	$cpfAluno = $_GET ['cpfAluno'];
	$rgAluno = $_GET ['rgAluno'];
	$estadoCivilAluno = $_GET ['estadoCivilAluno'];
	$dataNascimentoAluno = $_GET ['dataNascimentoAluno'];
	$nomePaiAluno = $_GET ['nomePaiAluno'];
	$nomeMaeAluno = $_GET ['nomeMaeAluno'];
	$sexoAluno = $_GET ['sexoAluno'];

?>


		<h2>Editando Aluno</h2></br>
		<form method="POST" action="atualiza.php">
        	<div class="formulario_alteracao">
 
			<?php print "<input type='hidden' name='codigoAluno' value='$codigoAluno'/>";?>
			
            <label>Nome:</label>
            <?php print "<input type='text' name='nomeAluno' value='$nomeAluno'/>"; ?></br>
            
            <label>Data de Inclusão:</label>
            <?php print "<input type='text' name='dataInclusaoAluno' value='$dataInclusaoAluno'/>";?></br>
            
            <label class="se">Sexo:</label>
            <?php 
			if ($sexoAluno == 'M'){
			print "<input class='sexo' type='radio' type='text' name='sexoAluno' value='M' checked/>";
			print "<label class='sex'>Masculino</label>";
            print "<input class='sexo' type='radio' type='text' name='sexoAluno' value='F'/>";
			print "<label class='sex'>Feminino</label>";
			}
			else {
				print "<input class='sexo' type='radio' type='text' name='sexoAluno' value='M'/>";
			print "<label class='sex'>Masculino</label>";
            print "<input class='sexo' type='radio' type='text' name='sexoAluno' value='F' checked/>";
			print "<label class='sex'>Feminino</label>";
			}
			
			?>		</br>
            
            <label>Telefone:</label>
            <?php print "<input type='text' name='telefoneAluno' value='$telefoneAluno'/>";?></br>
           
            <label>Celular:</label>
            <?php print "<input type='text' name='celularAluno' value='$celularAluno'/>";?></br>
           
            <label>Email:</label>
            <?php print "<input type='text' name='emailAluno' value='$emailAluno'/>";?></br>
           
            <label>Endereço:</label>
            <?php print "<input type='text' name='enderecoAluno' value='$enderecoAluno'/>";?></br>
           
            <label>Complemento:</label>
            <?php print "<input type='text' name='complementoAluno' value='$complementoAluno'/>";?></br>
           
            <label>Bairro:</label>
            <?php print "<input type='text' name='bairroAluno' value='$bairroAluno'/>";?></br>
           
            <label>Cep:</label>
            <?php print "<input type='text' name='cepAluno' value='$cepAluno'/>";?></br>
           
            <label>Cidade:</label>
            <?php print "<input type='text' name='cidadeAluno' value='$cidadeAluno'/>";?></br>
           
            <label>Estado:</label>
            <?php print "<input type='text' name='estadoAluno' value='$estadoAluno'/>";?></br>
          
            <label>CPF:</label>
            <?php print "<input type='text' name='cpfAluno' value='$cpfAluno'/>";?></br>
          
            <label>RG:</label>
            <?php print "<input type='text' name='rgAluno' value='$rgAluno'/>";?></br>
         
            <label>Estado Civil:</label>
            <?php print "<input type='text' name='estadoCivilAluno' value='$estadoCivilAluno'/>";?></br>
          
            <label>Data de Nascimento:</label>
            <?php print "<input type='text' name='dataNascimentoAluno' value='$dataNascimentoAluno'/>";?></br>
          
            <label>Nome do Pai:</label>
            <?php print "<input type='text' name='nomePaiAluno' value='$nomePaiAluno'/>";?></br>
           
            <label>Nome da Mãe:</label>
            <?php print "<input type='text' name='nomeMaeAluno' value='$nomeMaeAluno'/>";?></br>
			
			<button id="submit_atualiza" type="submit"></button> 
			
			<h2>Listagem de Alunos</h2>
		<?php
			/*Conexão com o BD*/
			$ds = 'mysql:host=localhost;dbname=bodycontrol';
			$user = 'root';
			$pass = '';
			$db = new PDO($ds, $user, $pass);
			
			/*SQL de consulta*/
			$query = "select * from aluno";
			$stm = $db->prepare($query);
			if ($stm -> execute()){
			
						
						print"<table border style='border-collapse:collapse'>";
						print"<tr class='lista'><th>NOME</th>";
						print"<th>EMAIL</th>";
						print"<th>TELEFONE</th>";
						print"<th>CELULAR</th>";
						print"<th>CPF</th>";
						print"<th>AÇÕES</th></tr>";
						
						
						while ($row = $stm->fetch()){
						$codigoAluno = $row ['codigoAluno'];
						$nomeAluno = $row ['nomeAluno'];
						$dataInclusaoAluno = $row ['dataInclusaoAluno'];
						$telefoneAluno = $row ['telefoneAluno'];
						$celularAluno = $row ['celularAluno'];
						$emailAluno = $row ['emailAluno'];
						$enderecoAluno = $row ['enderecoAluno'];
						$complementoAluno = $row ['complementoAluno'];
						$bairroAluno = $row ['bairroAluno'];
						$cepAluno = $row ['cepAluno'];
						$cidadeAluno = $row ['cidadeAluno'];
						$estadoAluno = $row ['estadoAluno'];
						$cpfAluno = $row ['cpfAluno'];
						$rgAluno = $row ['rgAluno'];
						$estadoCivilAluno = $row ['estadoCivilAluno'];
						$dataNascimentoAluno = $row ['dataNascimentoAluno'];
						$nomePaiAluno = $row ['nomePaiAluno'];
						$nomeMaeAluno = $row ['nomeMaeAluno'];
						$sexoAluno = $row ['sexoAluno'];
						
						print"<tr><td>$nomeAluno</td>";
						print"<td>$emailAluno</td>";
						print"<td>$telefoneAluno</td>";
						print"<td>$celularAluno</td>";
						print"<td>$cpfAluno</td>";
						print"<td><a href='delete.php?codigoAluno=$codigoAluno'>Delete</a> | ";
						print"<a href='edita.php?codigoAluno=$codigoAluno&nomeAluno=$nomeAluno&dataInclusaoAluno=$dataInclusaoAluno&telefoneAluno=$telefoneAluno&celularAluno=$celularAluno&emailAluno=$emailAluno&enderecoAluno=$enderecoAluno&complementoAluno=$complementoAluno&bairroAluno=$bairroAluno&cepAluno=$cepAluno&cidadeAluno=$cidadeAluno&estadoAluno=$estadoAluno&cpfAluno=$cpfAluno&rgAluno=$rgAluno&estadoCivilAluno=$estadoCivilAluno&dataNascimentoAluno=$dataNascimentoAluno&nomePaiAluno=$nomePaiAluno&nomeMaeAluno=$nomeMaeAluno&sexoAluno=$sexoAluno'>";
						print"Editar</a></td></tr>";
						

					}
					print "</table>";
			}
			
			else{
				print"<h3>Erro ao listar Alunos</h3>";
			}
		?>
		</form>
	</div>
							</div>
					</section>
			
			</div>
		

		<!-- Main Wrapper -->
			<div id="main-wrapper">

		<!-- Footer Wrapper -->
			<div id="footer-wrapper">

				<!-- Footer -->
					<div id="footer" class="container">
						<header>
							<h2>DÚVIDAS OU COMENTÁRIOS? <strong>FALE CONOSCO:</strong></h2>
						</header>
						<div class="row">
							<div class="6u">
								<section>
									<form method="post" action="#">
										<div class="row half">
											<div class="6u">
												<input name="name" placeholder="Nome" type="text" class="text" />
											</div>
											<div class="6u">
												<input name="email" placeholder="Email" type="text" class="text" />
											</div>
										</div>
										<div class="row half">
											<div class="12u">
												<textarea name="message" placeholder="Mensagem"></textarea>
											</div>
										</div>
										<div class="row half">
											<div class="12u">
												<a href="#" class="button button-icon icon icon-envelope">Enviar Mensagem</a>
											</div>
										</div>
									</form>
								</section>
							</div>
							<div class="6u">
								<section>
									<p>Escreve aqui o que você deseja para que os nossos serviços melhorem, escreva também a sua satisfação com os serviços realizados pela nossa equipe.</p>
									<div class="row">
										<ul class="icons 6u">
											<li class="icon icon-home">Av. Doutor Lisboa, Nº 500</li>
											<li class="icon icon-phone">
												(035) 9892-2133</li>
											<li class="icon icon-envelope">
												<a href="#">academia@bodycontrol.com</a></li>
										</ul>
										<ul class="icons 6u">
											<li class="icon icon-twitter">Academia Body Control</li>
											<li class="icon icon-dribbble">Academia Body Control</li>
											<li class="icon icon-facebook"><a href="https://www.facebook.com/pages/Body-Control/234431953391505?skip_nax_wizard=true">Academia Body Control</a></li>
											<li class="icon icon-google-plus">Academia Body Control</li>
										</ul>
									</div>
								</section>
							</div>
						</div>
					</div>

				<!-- Copyright -->
					<div id="copyright" class="container">
                      <p>&copy; Todos os diretos reservados. | 	          																																																&reg; Academia Body Control LTDA.</p>
					</div>

			</div>

	</body>
</html>

