<!DOCTYPE html>
<html>
<head>
	<title>PG Pecas</title>
	<style>
		.center {
			margin: auto;
			width: 70%;
			padding: 4% 10px 10px 10px;
		}

		.botaocarrinho {
		    display: table-cell;
		    vertical-align: middle
		}

	</style>
</head>
<body>


	<?php

		include ('Common/sessioncheck.php');

	// serve the page normally.

		include ('Resources/headerlogged.php');
		include ('Resources/footer.php');
		include 'DBAccess/pecas.php';?> <!-- Biblioteca com funçoes que acedem à tabela peças na BD -->


	<div class="container">

		<div class="coluna" style="width:40%">
			<div class="linha">
				<p><h2><center><?php echo getnomepeca($_GET["id"]); ?></center></h2></p>

				<p><img src=<?php echo getlinkpeca($_GET["id"])?> style="width: 100%"></p>

				<p><h4><center><?php echo getprecopeca($_GET["id"])." €"; ?></h4></p>

				<form method="POST" action="Common/adicionarcarrinho.php"><p><center><button type = "submit" name="idpeca" class="botaocarrinho" value=<?php echo $_GET["id"]; ?> style="width: 50%;"><img src="../TP2/Resources/cart.png" class="carrinho" style="width: 10%; height: 10%;"/></button></center></p>

				<input type="hidden" name="tipo" value="produto"></form>

			</div>
		</div>
		<div class="coluna" style="width:5%">
			<p><hr size="450%" width="1" align="center"></p>
		</div>
		<div class="coluna" style="width:55%">
			<p><?php echo nl2br (getdescricaopeca($_GET["id"])); ?></p>
		</div>

	</div>

</body>
</html>


