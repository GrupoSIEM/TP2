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

			#caixaregmaior {
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

			.error {color: #FF0000;}

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
		<?php include 'DBAccess/user.php';?> <!-- Biblioteca com funçoes que acedem à tabela user na BD -->

		<?php
			// define variables and set to empty values
			$MsgErro = "";
			$username = $nome = $email = $telemovel = $pass1 = $pass2 = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {

				do {
				  if (empty($_POST["regusername"]) || empty($_POST["reguser"]) || empty($_POST["regemail"]) || empty($_POST["regtelemovel"]) || empty($_POST["regpassword1"]) || empty($_POST["regpassword2"])) {
				    $MsgErro = "Preencha todos os campos obrigatórios marcados com *";
				    break;
				  } else {
				    $nome = test_input($_POST["reguser"]);
				    $username = test_input($_POST["regusername"]);
				    $email = test_input($_POST["regemail"]);
				    $telemovel = test_input($_POST["regtelemovel"]);
				    $pass1 = $_POST["regpassword1"];
				    $pass2 = $_POST["regpassword2"];
				  }

				  if($pass1 != $pass2) {
				  	$MsgErro = "As Palavras-Chave têm que coincidir";
				    break;
				  }

				  $res = userexists($nome);

				  if($res) {
				  	$MsgErro = "Utilizador já existe";
				    break;
				  } else {
				  	
				  	$res2 = insertuser($username, $nome, $email, $telemovel, $pass1);
				  }

				  if ($res2) {
						header("www.google.com");
				  } else {
						$MsgErro = "Erro ao registar utilizador";
				  }


				} while(0);

			}
			function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}
		?>



		<div class="container">
			<H3>Criar uma conta:</H3>
			<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<table>
				  <tr>
				    <th colspan="4">Registo</th>
				  </tr>
				  <tr>
				    <td width="50%" colspan="2"></td><td width="25%"></td><td width="25%"></td>
				  </tr>
				  <tr>
				    <td width="50%" colspan="2">Nome:*</td><td width="50%" colspan="2">Email:*</td>
				  </tr>
				  <tr>
				    <td width="50%" id="temcaixa" colspan="2">
				    	<input type = "text" id="caixaregmaior" name = "reguser" value=""></input>
				    </td>
				    <td width="50%" id="temcaixa" colspan="2">
				    	<input type = "text" id="caixaregmaior" name = "regemail" value=""></input>
				    </td>
				  </tr>
				  <tr>
				    <td width="25%">Username:*</td>
				    <td width="25%">Telemóvel:*</td>
				    <td width="25%">Palavra-Chave:*</td>
				    <td width="25%">Confirmar Palavra-Chave:*</td>
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
				    <td width="50%"  colspan="2"><span class="error"><?php echo $MsgErro;?></span></td><td width="25%"></td><td width="25%"><button type = "submit" name="cmdsubmit" value="">Registar</button><button type = "reset" name="cmdreset" value="">Limpar Dados</button></td>
				  </tr>
							  
				</table>
			</form>

			
		</div>

		<?php include 'Resources/footer.php';?> <!-- Inclusão do footer -->

	</body>


</html>