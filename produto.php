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
			</div>
		</div>
		<div class="coluna" style="width:5%">
			ads
		</div>
		<div class="coluna" style="width:55%">
			as
		</div>

	</div>

</body>
</html>


