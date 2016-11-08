<!DOCTYPE html>
<html>
	
	<head>
		<title>RG Peças</title>

	</head>

	<body>
		<?php session_start(); ?>
		<?php include '../DBAccess/cart.php';?> <!-- Biblioteca com funçoes que acedem à tabela carrinho na BD -->
		<?php

			if($_POST['tipo']=="pesquisa") {
				addtocart($_POST['idpeca'], $_SESSION['username']);

				exit(header("Location: ../pesquisa.php?pesq=".$_POST['pesq1']));
			} elseif ($_POST['tipo']=="produto") {
				addtocart($_POST['idpeca'], $_SESSION['username']);

				exit(header("Location: ../produto.php?id=".$_POST['idpeca']));

			}  elseif ($_POST['tipo']=="destaques") {
				addtocart($_POST['idpeca'], $_SESSION['username']);

				exit(header("Location: ../destaques.php"));

			}


		?>
		

	</body>




</html>