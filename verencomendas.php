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
		<?php include 'DBAccess/encomendadb.php';?> <!-- Biblioteca com funçoes que acedem à tabela encomenda na BD -->

		<div class="container">
			<p>As suas encomendas: </p>

			<table class="tabelapesquisa">
				  <tr>
				    <th width="14.28%">ID da encomenda</th><th width="14.28%">Data de pagamento</th><th width="14.28%">Data de entrega</th><th width="14.28%">Estado da encomenda</th><th width="14.28%">Quantidade de items</th><th width="14.28%">Preço total</th><th width="14.28%">Detalhes</th>
				  </tr>
					<form method="POST" action="Common/removerdocarrinho.php">
				  <?php $res=getencomendas($_SESSION['username']);


				  	while ($row = pg_fetch_array($res))
					{ 

						if ($row["dataentrega"] > $row["datapagamento"]) {
						    $estado="A ser precessada";
						} else {
							$estado="Entregue";
						}

						$pieces = explode(",", $row["quantidades"]);
						$soma=0;
						for ($i=0; $i < sizeof($pieces); $i++) { 
							$soma+=intval($pieces[$i]);
						}

					    echo '<tr><td width="14.28%">'.$row["id"].' </td><td width="14.28%">'.$row["datapagamento"].'</td><td width="14.28%">'.$row["dataentrega"].'</td><td width="14.28%">'.$estado.'</td><td width="14.28%">'.$soma.'</td><td width="14.28%">'.$row["preço"].' €</td><td width="14.28%"><a href="verartigosencomendas.php?id='.$row["id"].'&ids='.$row["idspeças"].'&quantidades='.$row["quantidades"].'">Ver Artigos</a></td></tr>';

					} 
					
				  ?>

				  </form>
				  
							  
			</table>
	


		</div>

		<?php include 'Resources/footer.php';?> <!-- Inclusão do footer -->

</body>
</html>