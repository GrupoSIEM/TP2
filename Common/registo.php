<?php

	if ($_POST[]) {
	      
	      exit(header("Location: index.php"));
	}
	



		/* -----------------------  Text Field ----------------------- */
		echo "<b>Text Field</b><br>";
		echo "Nome: ".$_POST['seunome']."<br/>";
		echo "<br/>";

		/* -----------------------  Password Field ------------------- */
		echo "<b>Password Field</b><br>";
		echo "Password: ".$_POST['pass']."<br/>";
		echo "<br/>";
		
		/* -----------------------  Check Box------------------------- */
		echo "<b>Check Box</b><br>";
		echo "Opcao 1: ".$_POST['opcao1']."<br/>";
		echo "Opcao 2: ".$_POST['opcao2']."<br/>";
		echo "Opcao 3: ".$_POST['opcao3']."<br/>";
		echo "<br/>";

		/* -----------------------  Radio Buttons -------------------- */
		echo "<b>Radio Buttons </b><br/>";
		echo "Opcao seleccionada: ".$_POST['grupo1']."<br/><br/>";
		echo "<br/>";

		/* -----------------------  Menu Drop Down ------------------- */
		echo "<b>Menu Drop Down</b><br>";
		echo "Opcao seleccionada: ".$_POST['Maquina']."<br/>";

?>