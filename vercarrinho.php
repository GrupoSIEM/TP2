<!DOCTYPE html>
<html>
<head>
	<title>PG Pecas</title>

	<link rel="stylesheet" type="text/css" href="Stylesheets/tabelas.css">

	<style>
			
			.imagens {
				height: 100px;
				width: 100px;
				margin: 0;
				padding: 0;
			}
			.carrinho {
				height: 40px;
				width: 40px;
				margin: 0;
				padding: 0;
			}

		</style>


</head>
<body>

		<?php include 'Common/sessioncheck.php';?>
		<?php include 'Resources/headerlogged.php';?> <!-- Inclusão do header -->
		<?php include 'Common/connectdb.php';?> <!-- Conexão à base de dados -->
		<?php include 'DBAccess/user.php';?> <!-- Biblioteca com funçoes que acedem à tabela user na BD -->
		<?php include 'DBAccess/pecas.php';?> <!-- Biblioteca com funçoes que acedem à tabela peças na BD -->

		<div class="container">
			<p>Os artigos do seu carrinho são: </p>

			<table class="tabelapesquisa">
				  <tr>
				    <th width="20%">Imagem</th><th width="20%">Nome</th><th width="20%">Marca</th><th width="20%">Preço</th><th width="20%">Tirar do carrinho</th>
				  </tr>
					<form method="POST" action="Common/removerdocarrinho.php">
				  <?php $res=getitemscart($_SESSION['username']);

				  	while ($row = pg_fetch_array($res))
					{ 
					    echo '<tr><td width="20%"><img src="'.$row["link"].'" class="imagens" /> </td><td width="20%">'.$row["nome"].'</td><td width="20%">'.$row["marca"].'</td><td width="20%">'.$row["preço"].' €</td><td width="20%"><button type = "submit" name="idcarrinho" value="'.$row[0].'"><img src="../TP2/Resources/X.png" class="carrinho" /></button></td></tr>';

					} 
					
				  ?>

				  </form>
				  
							  
			</table>
	


		</div>

		<?php include 'Resources/footer.php';?> <!-- Inclusão do footer -->

</body>
</html>