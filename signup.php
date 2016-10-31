<!DOCTYPE html>
<html>
	
	<head>
		<title>RG Peças</title>
		<style>
			table {
				border: 1px solid #dddddd;
			    font-family: arial, sans-serif;
			    border-collapse: collapse;
			    width: 100%;
			}
			table h4 {
				margin: 10px 0 0 0;
			}

			th {
			    border: 1px solid #dddddd;
			    text-align: left;
			    padding: 8px 8px 8px 1%;
			    background-color: #D47404;

			}
			td {
				/*border: 1px solid #dddddd;*/
			    text-align: left;
			    padding: 8px 8px 8px 2%;
			}

			#temcaixa {
				padding: 0px 8px 8px 2%;
			}

			#caixareg{
				height: 20px;
				width: 90%;
			}

			#caixaregemail {
				height: 20px;
				width: 95%;
			}

			button {
			    background-color: #B3ACA6;
			    color: white;
			    padding: 4px 8px;
			    text-align: center; 
			    text-decoration: none;
			    display: block;
			    margin: 2% 9% 0 2px;
			    float: right;
			}

			button:hover, button:active {
			    background-color: #444549;
			}

		</style>
	</head>

	<body>
		<?php

			session_start();

			if (isset($_SESSION['username']) || !empty($_SESSION['username'])) {
			      
			      exit(header("Location: pinicial.php"));
			}

		?>
		<?php include 'Resources/header.php';?> <!-- Inclusão do header -->
		<?php include 'Common/connectdb.php';?> <!-- Conexão à base de dados -->
		
		<div class="container">
			<H3>Criar uma conta:</H3>
			<form method="POST" action="Common/registo.php">
				<table>
				  <tr>
				    <th colspan="3">Registo</th>
				  </tr>
				  <tr>
				    <td width="50%"></td><td width="25%"></td><td width="25%"></td>
				  </tr>
				  <tr>
				    <td width="50%">Nome:*</td><td width="50%" colspan="2">Email:*</td>
				  </tr>
				  <tr>
				    <td width="50%" id="temcaixa">
				    	<input type = "text" id="caixareg" name = "reguser" value=""></input>
				    </td>
				    <td width="50%" id="temcaixa" colspan="2">
				    	<input type = "text" id="caixaregemail" name = "regemail" value=""></input>
				    </td>
				  </tr>
				  <tr>
				    <td width="50%">Telemóvel:*</td><td width="25%">Palavra-Chave:*</td><td width="25%">Confirmar Palavra-Chave:*</td>
				  </tr>
				  <tr>
				    <td width="50%" id="temcaixa">
				    	<input type = "text" id="caixareg" name = "regtelemovel" value=""></input>
				    </td><td width="25%" id="temcaixa"><input type = "password" id="caixareg" name = "regpassword1" value=""></input></td><td width="25%" id="temcaixa"><input type = "password" id="caixareg" name = "regpassword2" value=""></input></td>
				  </tr>
				  <tr>
				    <td width="50%"><h4>Morada:</h4></td><td width="25%"></td><td width="25%"></td>
				  </tr>
				  <tr>
				    <td width="50%">Endereço:</td><td width="25%">Código Postal:</td><td width="25%">Cidade:</td>
				  </tr>
				  <tr>
				    <td width="50%" id="temcaixa">
				    	<input type = "text" id="caixareg" name = "regendereco1" value=""></input>
				    </td>
				    <td width="25%" id="temcaixa">
				    	<input type = "password" id="caixareg" name = "regcodpostal" value=""></input>
				    </td>
				    <td width="25%" id="temcaixa">
				    	<input type = "password" id="caixareg" name = "regcidade" value=""></input>
				    </td>
				  </tr>
				  <tr>
				    <td width="50%"></td><td width="25%">Região:</td><td width="25%">País:</td>
				  </tr>
				  <tr>
				    <td width="50%" id="temcaixa">
				    	<input type = "text" id="caixareg" name = "regendereco2" value=""></input>
				    </td>
				    <td width="25%" id="temcaixa">
				    	<input type = "password" id="caixareg" name = "regregiao" value=""></input>
				    </td>
				    <td width="25%" id="temcaixa">
				    	<input type = "password" id="caixareg" name = "regpais" value=""></input>
				    </td>
				  </tr>
				  <tr>
				    <td width="50%"></td><td width="25%"></td><td width="25%"><button type = "submit" name="cmdsubmit" value="">Registar</button><button type = "reset" name="cmdreset" value="">Limpar Dados</button></td>
				  </tr>
							  
				</table>
			</form>
			
		</div>

		<?php include 'Resources/footer.php';?> <!-- Inclusão do footer -->

	</body>


</html>