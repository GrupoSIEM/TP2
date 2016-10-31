<?php

	
	function searchbyname($nome) {
		include '../Common/connectdb.php';

		$query = "select * from utilizador where nome = '".$nome."';";


		$result = pg_exec($conn, $query);

		$row = pg_fetch_row($result, 0); //obter a primeira linha [0]
		$name = $row[3];

		pg_close($conn);

		return $name;

	}


	function getpassword($nome) {
		include '../Common/connectdb.php';

		$query = "select password from utilizador where nome = '".$nome."';";


		$result = pg_exec($conn, $query);

		$row = pg_fetch_row($result, 0); //obter a primeira linha [0]
		$pass = $row[0];

		pg_close($conn);

		return $pass;

	}



?>