<!DOCTYPE html>
<html>
	
	<head>
		<title>RG Peças</title>
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

			a:link {
			    text-decoration: none;
			    color:black;
			}

			a:visited {
			    text-decoration: none;
			}

			a:hover {
			    text-decoration: underline;
			}

			a:active {
			    text-decoration: underline;
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
			<p>Destaques:</p>

			<table class="tabelapesquisa">
				  <tr>
					    <th width="20%">Imagem</th><th width="20%">Nome</th><th width="20%">Marca</th><th width="20%">Preço</th><th width="20%">Adicionar ao carrinho</th>
					  </tr>
				<form method="POST" action="Common/adicionarcarrinho.php">
				  <?php $res=verpeçasdestaque();

				  	while ($row = pg_fetch_assoc($res))
					{ 
					    echo '<tr><td width="20%"><a href="produto.php?id='.$row["id"].'"><img src="'.$row["link"].'" class="imagens" /></a> </td><td width="20%"><a href="produto.php?id='.$row["id"].'">'.$row["nome"].'</a></td><td width="20%">'.$row["marca"].'</td><td width="20%">'.$row["preço"].' €</td><td width="20%"><button type = "submit" name="idpeca" value="'.$row["id"].'"><img src="../TP2/Resources/cart.png" class="carrinho" /></button></td></tr>';

					} 
					echo '<input type="hidden" name="tipo" value="destaques">';
				  ;?>

				</form>
				    
			</table>

		</div>




		<?php include 'Resources/footer.php';?> <!-- Inclusão do footer -->

	</body>


</html>