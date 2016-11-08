<!DOCTYPE html>
<html>
	
	<head>
		<title>RG Peças</title>
		<style>
			.center {
			    margin: auto;
			    width: 70%;
			    padding: 4% 10px 10px 10px;
			}
		</style>
	</head>

	<body>
		<?php

			session_start();

			if (isset($_SESSION['username']) || !empty($_SESSION['username'])) {
			      
			      exit(header("Location: pinicial.php"));
			}

		?>
		<?php include 'Resources/header.php';?> <!-- Inclusão do header -->


		
		<?php include 'Common/connectdb.php';?> <!-- Conexão à base de dados -->
		

		<?php 

				$num = rand(1,7);
				echo '<div class="center">

				Este website foi desenvolvido no âmbito da disciplina de Sistemas de Informação Empresariais. Ao entrar no nosso website poderá ver e comprar produtos informáticos. Ao lado encontra as credenciais para fazer login. É também possível realizar um registo. <p></p>

				<div class="coluna"><img src="Resources/img'.$num.'.jpg" style="width:95%"></div> <div class="coluna"><h2>Login: cliente <br> Password: cliente</h2></div>



				
				</div>';

		;?>
		

	
		<?php include 'Resources/footer.php';?> <!-- Inclusão do footer -->
		

	</body>




</html>