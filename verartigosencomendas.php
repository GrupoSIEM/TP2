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
			<p>Os artigos da sua encomenda com id <?php echo $_GET["id"]; ?> são: </p>

			<table class="tabelapesquisa">
				  <tr>
				    <th width="20%">Imagem</th><th width="20%">Nome</th><th width="20%">Marca</th><th width="20%">Preço</th><th width="20%">Quantidade</th>
				  </tr>
					
				  <?php $res=getpecas($_GET["ids"]);

				  $pieces = explode(",", $_GET["quantidades"]);
				  $i=0;

				  	while ($row = pg_fetch_array($res))
					{ 
					    echo '<tr><td width="20%"><img src="'.$row["link"].'" class="imagens" /> </td><td width="20%"><a href="produto.php?id='.$row["id"].'">'.$row["nome"].'</a></td><td width="20%">'.$row["marca"].'</td><td width="20%">'.$row["preço"].' €</td><td width="20%">'.$pieces[$i].'</td></tr>';

					    $i+=1;

					} 
					
				  ?>

				  
							  
			</table>
	


		</div>

		<?php include 'Resources/footer.php';?> <!-- Inclusão do footer -->

</body>
</html>