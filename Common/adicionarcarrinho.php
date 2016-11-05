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

			exit(header("Location: ../pesquisa.php"));

		?>
		

	</body>




</html>