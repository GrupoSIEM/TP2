<!DOCTYPE html>
<html>
	
	<head>
		<title>RG Peças</title>
		<link rel="stylesheet" type="text/css" href="Stylesheets/tabelas.css">
	</head>

	<body>
		<?php

			session_start();

			if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
			      
			      exit(header("Location: index.php"));
			}

		?>
		<?php include 'Resources/headerlogged.php';?> <!-- Inclusão do header -->
		<?php include 'Common/connectdb.php';?> <!-- Conexão à base de dados -->
		<?php include 'DBAccess/user.php';?> <!-- Biblioteca com funçoes que acedem à tabela user na BD -->

		<?php $nom=$_SESSION['username']; ?>


		<div class="container">
			<H3>Perfil</H3>
			<form method="POST" action="alterardados.php">
				<table>
				  <tr>
				    <th colspan="2">Dados</th>
				  </tr>
				  <tr>
				    <td width="50%"></td><td width="50%"></td>
				  </tr>
				  <tr>
				    <td width="50%">Nome:</td><td width="50%">Email:</td>
				  </tr>
				  <tr>
				    <td width="50%" id="temdados">
				    	<?php echo getnomeusuario($nom); ?>
				    </td>
				    <td width="50%" id="temdados">
				    	<?php echo getemail($nom); ?>
				    </td>
				  </tr>
				  <tr>
				    <td width="50%">Username:</td>
				    <td width="50%">Telemóvel:</td>
				  </tr>
				  <tr>
				  	<td width="50%" id="temdados">
				  		<?php echo $nom; ?>
				  	</td>
				    <td width="50%" id="temdados">
				    	<?php echo gettelemovel($nom); ?>
				    </td>
				  </tr>
				  <tr>
				    <td width="100%" colspan="2"><h4>Morada:</h4></td>
				  </tr>
				  <tr>
				    <td width="100%" colspan="2" id="temdados"><?php echo nl2br (getadress($nom)); ?></td>
				  </tr>
				  <tr>
				    <td width="100%" colspan="2"><button type = "submit" name="cmdsubmit" value="">Alterar dados</button></td>
				  </tr>
							  
				</table>
			</form>
			

			
		</div>

		<?php include 'Resources/footer.php';?> <!-- Inclusão do footer -->

	</body>


</html>