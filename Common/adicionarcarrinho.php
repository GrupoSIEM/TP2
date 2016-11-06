<!DOCTYPE html>
<html>
	
	<head>
		<title>RG Peças</title>

	</head>

	<body>
		<?php session_start(); ?>
		<?php include '../DBAccess/cart.php';?> <!-- Biblioteca com funçoes que acedem à tabela carrinho na BD -->
		<?php

			addtocart($_POST['idpeca'], $_SESSION['username']);
			echo $_POST['pesq'];

			exit(header("Location: ../pesquisa.php?pesq=".$_POST['pesq1']));

		?>
		

	</body>




</html>