<!DOCTYPE html>
<html>
	
	<head>
		<title>RG Peças</title>
		<link rel="stylesheet" type="text/css" href="Stylesheets/tabelas.css">
	</head>

	<body>
		<?php include 'Common/sessioncheck.php';?>
		<?php include 'Resources/headerlogged.php';?> <!-- Inclusão do header -->
		<?php include 'Common/connectdb.php';?> <!-- Conexão à base de dados -->
		<?php include 'DBAccess/user.php';?> <!-- Biblioteca com funçoes que acedem à tabela user na BD -->
		<?php include 'DBAccess/pecas.php';?> <!-- Biblioteca com funçoes que acedem à tabela peças na BD -->

		<div class="container">
			<p>Resultados encontrados para a pesquisa: <?php echo $_POST['caixapesquisa'];?></p>

			<table class="tabelapesquisa">
				  <tr>
				    <th colspan="5" width="20%">Imagem</th><th width="20%">Nome</th><th width="20%">Marca</th><th width="20%">Preço</th><th width="20%">Adicionar ao carrinho</th>
				  </tr>
					
				  <?php $res=verpeças($_POST['caixapesquisa']);

				  	while (!($row = pg_fetch_assoc($res)))
					{ 
					     // echo '<tr><td><img src="'.$row["link"]'" class="headerLogo coluna" /> </td><td>'.$row["nome"]'</td><td>'.$row["marca"]'</td><td>'.$row["preço"]'</td><td><img src="https://pixabay.com/static/uploads/photo/2013/07/12/14/53/cart-148964_960_720.png"/></td></tr>"];';
					     echo '<tr><td>asssdadaa</td></tr>;';
					     echo "kbsdkfbs";
					} 
					echo "bug1";
				  ;?>
				  
							  
			</table>
	


		</div>




		<?php include 'Resources/footer.php';?> <!-- Inclusão do footer -->

	</body>


</html>