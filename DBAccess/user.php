<?php

	function userexists($nome) {
		include '../TP2/Common/connectdb.php';

		$query = "select * from utilizador where nome = '".$nome."';";


		$result = pg_exec($conn, $query);

		$row = pg_fetch_row($result, 0); //obter a primeira linha [0]
		
		if(isset($row[0])) {
			$res = true;
		} else {
			$res = false;
		}


		pg_close($conn);

		return $res;

	}

	function getuser($nome) {
		include '../Common/connectdb.php';

		$query = "select * from utilizador where nome = '".$nome."';";


		$result = pg_exec($conn, $query);

		$row = pg_fetch_row($result, 0); //obter a primeira linha [0]
		
		if(isset($row[3])) {
			$name = $row[3];
		} else {
			$name = null;
		}


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

	function insertuser($username, $nome, $email, $telemovel, $pass) {
		include '../TP2/Common/connectdb.php';

		// $query1 = "select max(id) from utilizador;";
		// $result1 = pg_exec($conn, $query1);
		// $row = pg_fetch_row($result, 0); //obter a primeira linha [0]
		// $id = $row[0] + 1;
		$id=2;

		$query2 = "insert into utilizador (id,nome,telefone,nomeusuario, password) values (".$id.",".$nome.",".$telemovel.",".$username.",".$pass.");";


		$result2 = pg_exec($conn, $query2);

		pg_close($conn);

		return $result2;

	}


?>