<!DOCTYPE html>
<html>
	
	<head>
		<title>RG Peças</title>

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
			<br/>

			<table>
			  <tr>
			    <th>Company</th>
			  </tr>
			  <tr>
			    <form method="POST" action="registar.php">

				
				<!-- -----------------------  Text Field ------------------------------------------------------------------ -->
					<b>Exemplo de Text Field</b><br>
					Nome: <input type = "text" name="seunome" value="escreva aqui o seu nome" size = 30></input>
					<br/><br/>


				<!-- -----------------------  Password Field ------------------------------------------------------------------ -->
					<b>Exemplo de Password Field</b><br/>
					Password: <input type = "password" name="pass" size = 10></input>
					<br/><br/>

					
				<!-- -----------------------  Check Box------------------------------------------------------------- 
					a variável opcao1 toma o valor T1 se o utilizador seleccionar a opção Torno 1, e toma o valor nulo no caso contrário 
					a variável opcao2 toma o valor F2 se o utilizador seleccionar a opção Freza 2, e toma o valor nulo no caso contrário 
					a variável opcao3 toma o valor J1 se o utilizador seleccionar a opção Jito 1, e toma o valor nulo no caso contrário 
				-->
					<b>Exemplo de Check Box</b><br>
					<input type="checkbox" name="opcao1" value="T1"> Torno1<br>
					<input type="checkbox" name="opcao2" value="F2" checked> Freza 2<br>
					<input type="checkbox" name="opcao3" value="J1"> Jito 1<br>
					<br/>

					
				<!-- -----------------------  Radio Buttons ------------------------------------------------------------- 
				a variável grupo1 toma o valor:
				- T1 se o utilizador seleccionar a opção Torno 1
				- F2 se o utilizador seleccionar a opção Freza 2
				- J1 se o utilizador seleccionar a opção Jito 1
				-->
					<b>Exemplo de Radio Buttons </b><br>
					<input type="radio" name="grupo1" value="T1">Torno 1<br>
					<input type="radio" name="grupo1" value="F2" checked> Freza 2<br>
					<input type="radio" name="grupo1" value="J1"> Jito 1<br>
					<br/>

					
				<!-- -----------------------  Menu Drop Down ------------------------------------------------------------- 
				a variável Maquina toma o valor:
				- T1 se o utilizador seleccionar a opção Torno 1
				- F2 se o utilizador seleccionar a opção Freza 2
				- J1 se o utilizador seleccionar a opção Jito 1
				-->
					<b>Exemplo de Menu Drop Down</b><br>
					Maquina: 
					<Select name="maquina">
						<Option value=T1>Torno 1</Option><br/>
						<Option value=F2>Freza 2</Option><br/>
						<Option value=J1>Jito 1</Option><br/>
					</Select>
					<br/><br/>


				<!-- -----------------------  Botao Reset ------------------------------------------------------------- -->
					<b>Exemplo de Botao Reset</b><br>
					Clique aqui para limpar valores <input type = "reset" name="cmdreset" value="Limpar"></input>
					<br/><br/>


				<!-- -----------------------  Botao Submit ------------------------------------------------------------- -->
					<b>Exemplo de Botao Submit</b><br>
					ou aqui para confirmar a submissão <input type = "submit" name="cmdsubmit" value="OK"></input>

				</form>
			  </tr>
			  
			</table>

			
		</div>

		<?php include 'Resources/footer.php';?> <!-- Inclusão do footer -->

	</body>




</html>