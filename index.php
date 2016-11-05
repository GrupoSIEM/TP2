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
		<?php include 'Resources/footer.php';?> <!-- Inclusão do footer -->

		<?php 

				$num = rand(1,7);
				echo '<div class="center"><img src="Resources/img'.$num.'.jpg" style="width:100%"><br></div>';

		;?>
		



		

	</body>




</html>