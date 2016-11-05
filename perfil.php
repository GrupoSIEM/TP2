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
			
				<table>
				  <tr>
				    <th colspan="4">Dados</th>
				  </tr>
				  <tr>
				    <td width="50%" colspan="2"></td><td width="25%"></td><td width="25%"></td>
				  </tr>
				  <tr>
				    <td width="50%" colspan="2">Nome:</td><td width="50%" colspan="2">Email:</td>
				  </tr>
				  <tr>
				    <td width="50%" colspan="2">
				    	<?php echo nl2br ("\t".$nom); ?>
				    </td>
				    <td width="50%" colspan="2">
				    	<?php echo getemail($nom); ?>
				    </td>
				  </tr>
				  <tr>
				    <td width="25%">Username:</td>
				    <td width="25%">Telemóvel:</td>
				    <td width="25%">Palavra-Chave:</td>
				    <td width="25%">Confirmar Palavra-Chave:</td>
				  </tr>
				  <tr>
				  	<td width="25%" id="temcaixa">
				  		<input type = "text" id="caixareg" name = "regusername" value=""></input>
				  	</td>
				    <td width="25%" id="temcaixa">
				    	<input type = "text" id="caixareg" name = "regtelemovel" value=""></input>
				    </td>
				    <td width="25%" id="temcaixa">
				    	<input type = "password" id="caixareg" name = "regpassword1" value=""></input>
				    </td>
				    <td width="25%" id="temcaixa">
				    	<input type = "password" id="caixareg" name = "regpassword2" value=""></input>
				    </td>
				  </tr>
				  <tr>
				    <td width="50%"  colspan="2"><h4>Morada:</h4></td><td width="25%"></td><td width="25%"></td>
				  </tr>
				  <tr>
				    <td width="50%"  colspan="2">Endereço:</td><td width="25%">Código Postal:</td><td width="25%">Cidade:</td>
				  </tr>
				  <tr>
				    <td width="50%" id="temcaixa"  colspan="2">
				    	<input type = "text" id="caixaregmaior" name = "regendereco1" value=""></input>
				    </td>
				    <td width="25%" id="temcaixa">
				    	<input type = "password" id="caixareg" name = "regcodpostal" value=""></input>
				    </td>
				    <td width="25%" id="temcaixa">
				    	<input type = "password" id="caixareg" name = "regcidade" value=""></input>
				    </td>
				  </tr>
				  <tr>
				    <td width="50%"  colspan="2"></td><td width="25%">Região:</td><td width="25%">País:</td>
				  </tr>
				  <tr>
				    <td width="50%" id="temcaixa"  colspan="2">
				    	<input type = "text" id="caixaregmaior" name = "regendereco2" value=""></input>
				    </td>
				    <td width="25%" id="temcaixa">
				    	<input type = "password" id="caixareg" name = "regregiao" value=""></input>
				    </td>
				    <td width="25%" id="temcaixa">
				    	<input type = "password" id="caixareg" name = "regpais" value=""></input>
				    </td>
				  </tr>
				  <tr>
				    <td width="50%"  colspan="2"><span class="error"></span></td><td width="25%"></td><td width="25%"><button type = "submit" name="cmdsubmit" value="">Registar</button><button type = "reset" name="cmdreset" value="">Limpar Dados</button></td>
				  </tr>
							  
				</table>
			

			
		</div>

		<?php include 'Resources/footer.php';?> <!-- Inclusão do footer -->

	</body>


</html>