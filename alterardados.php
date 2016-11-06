<!DOCTYPE html>
<html>
	
	<head>
		<title>RG Peças</title>
		<link rel="stylesheet" type="text/css" href="Stylesheets/tabelas.css">
	</head>

	<body>
		<?php

			session_start();

		?>
		<?php include 'Resources/headerlogged.php';?> <!-- Inclusão do header -->
		<?php include 'Common/connectdb.php';?> <!-- Conexão à base de dados -->
		<?php include 'DBAccess/user.php';?> <!-- Biblioteca com funçoes que acedem à tabela user na BD -->
		<?php $nom=$_SESSION['username'];
			$aux=false;
			$pieces = explode(",", getadress($nom));
			$end1=$pieces[0];
			$end2=$pieces[1];
			$zip=explode(" ", $pieces[2]);
			$zipcode = $zip[0];
			$cidade = $zip[1];
			$reg=$pieces[3];
			$pais=$pieces[4];
		?>
		<?php
			// define variables and set to empty values
			$MsgErro = "";
			$username = $morada = $nome = $email = $telemovel = $pass1 = $pass2 = "";

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
				    $morada = $_POST["regendereco1"].",\n".$_POST["regendereco2"].",\n".$_POST["regcodpostal"]." ".$_POST["regcidade"].",\n".$_POST["regregiao"].", ".$_POST["regpais"];


				  }

				  if($pass1 != $pass2) {
				  	$MsgErro = "As Palavras-Chave têm que coincidir";
				    break;
				  }

				  //Fazer verificação de email e do numero

				  if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
				      $MsgErro = "O email não é válido. Por favor introduza um email válido e tente novamente."; // Return Error - Invalid Email
				      break;
				  }

				  	$res2 = updateuser($nom, $username, $nome, $email, $telemovel, $pass1, $morada);
				  

				  if ($res2) {
				  	$MsgErro = "Dados alterados com sucesso";
					exit(header("Location: alterardados.php"));
				  } else {
						$MsgErro = "Erro!";
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
			<H3>Alterar dados:</H3>
			<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<table>
				  <tr>
				    <th colspan="4">Perfil</th>
				  </tr>
				  <tr>
				    <td width="50%" colspan="2"></td><td width="25%"></td><td width="25%"></td>
				  </tr>
				  <tr>
				    <td width="50%" colspan="2">Nome:*</td><td width="50%" colspan="2">Email:*</td>
				  </tr>
				  <tr>
				    <td width="50%" id="temcaixa" colspan="2">
				    	<input type = "text" id="caixaregmaior" name = "reguser" value=<?php echo getnomeusuario($nom); ?>></input>
				    </td>
				    <td width="50%" id="temcaixa" colspan="2">
				    	<input type = "text" id="caixaregmaior" name = "regemail" value=<?php echo getemail($nom); ?>></input>
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
				  		<input type = "text" id="caixareg" name = "regusername" value=<?php echo $nom; ?>></input>
				  	</td>
				    <td width="25%" id="temcaixa">
				    	<input type = "text" id="caixareg" name = "regtelemovel" value=<?php echo gettelemovel($nom); ?>></input>
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
				    	<input type = "text" id="caixaregmaior" name = "regendereco1" value=<?php echo $end1; ?>></input>
				    </td>
				    <td width="25%" id="temcaixa">
				    	<input type = "text" id="caixareg" name = "regcodpostal" value=<?php echo $zipcode; ?>></input>
				    </td>
				    <td width="25%" id="temcaixa">
				    	<input type = "text" id="caixareg" name = "regcidade" value=<?php echo $cidade; ?>></input>
				    </td>
				  </tr>
				  <tr>
				    <td width="50%"  colspan="2"></td><td width="25%">Região:</td><td width="25%">País:</td>
				  </tr>
				  <tr>
				    <td width="50%" id="temcaixa"  colspan="2">
				    	<input type = "text" id="caixaregmaior" name = "regendereco2" value=<?php echo $end2; ?>></input>
				    </td>
				    <td width="25%" id="temcaixa">
				    	<input type = "text" id="caixareg" name = "regregiao" value=<?php echo $reg; ?>></input>
				    </td>
				    <td width="25%" id="temcaixa">
				    	<input type = "text" id="caixareg" name = "regpais" value=<?php echo $pais; ?>></input>
				    </td>
				  </tr>
				  <tr>
				    <td width="50%"  colspan="2"><span class="error"><?php echo $MsgErro;?></span></td><td width="25%"></td><td width="25%"><button class="tabela" type = "submit" name="cmdsubmit" value="">Alterar dados</button></td>
				  </tr>
							  
				</table>
			</form>

			
		</div>

		<?php include 'Resources/footer.php';?> <!-- Inclusão do footer -->

	</body>


</html>