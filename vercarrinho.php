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

			a{	
				color: black;
				text-decoration: none;



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
				    <th width="14.2857%">Imagem</th><th width="14.2857%">Nome</th><th width="14.2857%">Marca</th><th width="14.2857%">Preço p/unidade</th><th width="14.2857%">Preço</th><th width="14.2857%">Quantidade</th><th width="14.2857%">Tirar do carrinho</th>
				  </tr>
					<form method="POST" action="Common/removerdocarrinho.php">
				  <?php $res=getitemscart($_SESSION['username']);

				  	while ($row = pg_fetch_array($res))
					{ 
					    echo '<tr><td width="14.2857%"><img src="'.$row["link"].'" class="imagens" /> </td><td width="14.2857%"><a href="produto.php?id='.$row["id"].'">'.$row["nome"].'</a></td><td width="14.2857%">'.$row["marca"].'</td><td width="14.2857%">'.$row["preço"].' €</td><td width="14.2857%">'.$row["preço"]*$row["quantidade"].' €</td><td width="14.2857%">'.$row["quantidade"].'</td><td width="14.2857%"><button type = "submit" name="idcarrinho" value="'.$row[0].'"><img src="../TP2/Resources/X.png" class="carrinho" /></button></td></tr>';

					} 
					
				  ?>

				  </form>
				  
							  
			</table>
	


		</div>

		<?php include 'Resources/footer.php';?> <!-- Inclusão do footer -->

</body>
</html>