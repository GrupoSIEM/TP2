<!DOCTYPE html>
<html>



	<?php
		

		// Ver se e um registo novo e se sim correr o codigo de registo

		$decisao = $_POST['cmdsubmit'];

		if ($decisao=='registar') {
			exit(header("Location: ../signup.php"));
		}

		//----------------------------------



		include 'encrypt.php';
		include '../DBAccess/user.php';

		$nome = $_POST['caixauser'];
		$password = encrypt($_POST['caixapassword']);  // encripta a password vinda do form

		$passworddb = getpassword($nome);


		if ($password == $passworddb) {
			//Login feito com sucesso
			session_start();
			$_SESSION['username'] = $nome;
			exit(header("Location: ../pinicial.php"));
		} 
		else {
			//Login falhado
			header("Location: ../index.php");
		}


	?>

</html>