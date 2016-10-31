<html>



	<?php
		include '../DBAccess/user.php';

		$nome = $_POST['caixauser'];
		$password = $_POST['caixapassword'];

		$passworddb = getpassword($nome);

		if ($password == $passworddb) {
			echo "Login feito com sucesso";
		} else {
			echo "Login falhado";
		}

	?>

</html>