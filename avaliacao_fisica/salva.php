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
							<h1 id="logo"><a href="#">Cadastro Avaliação Física</a></h1>
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
											<li><a href="../aluno/pesquisa.php">Aluno</a></li>
											<li><a href="../equipamento/pesquisa.php">Equipamentos</a></li>
											<li><a href="pesquisa.php">Avaliação Física</a></li>
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
						<div class="row">
                            <div class="ok">
								<?php
	/* Conectando com o Banco de Dados */
	$ds = 'mysql:host=localhost;dbname=bodycontrol';
	$user = 'root';
	$pass = '';
	$db = new PDO($ds, $user, $pass);

	/* Crinado o comando SQL */
	$query = "INSERT INTO avaliacaofisica ( codigoAluno, pesoAluno, estaturaAluno, dataAvalicaoAluno, medidaTorax, medidaAbdomen, medidaAntebraco, medidaBraco, medidaCoxa, medidaPanturrilha, medidaCintura, medidaQuadril, medidaDobraCutaneaTorax, medidaDobraCutaneaAbdomen, medidaDobraCutaneaCoxa, medidaDobraCutaneaTriceps, medidaDobraCutaneaSupraIliaca, porcentagemGorduraAluno, pesoMagroAluno, pesoGordoAluno, pesoDesejavelAluno
				) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
				
	/* Valores que serão inseridos no BD */
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
	
	/* Inserindo os valores dentro do query */
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
	
                            
	/* Executando QUERY */
	if ($stm->execute()){
	print '<p>Avaliação Física cadastrada com sucesso!</p>';
	}
	
	else{
	print'<p>Erro ao cadastrar a Avaliação Física</p>';
	}
								
?>
							</br><a href='../cadastro_af.php'>Clique aqui, para cadastrar outra Avaliação Física!</a>	
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