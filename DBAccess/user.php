<?php

	function userexists($nome) {
		include '../TP2/Common/connectdb.php';

		$query = "select * from utilizador where nome = '".$nome."';";


		$result = pg_exec($conn, $query);
		if (!$result) {
		  echo "An error occurred.\n";
		  exit;
		}

		$row = pg_fetch_array($result); //obter a primeira linha [0]
		
		if($row!=null) {
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
		if (!$result) {
		  echo "An error occurred.\n";
		  exit;
		}

		$row = pg_fetch_array($result, 0); //obter a primeira linha [0]
		
		if($row!=null) {
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
		if (!$result) {
		  echo "An error occurred.\n";
		  exit;
		}

		$row = pg_fetch_array($result, 0); //obter a primeira linha [0]
		$pass = $row[0];

		pg_close($conn);

		return $pass;

	}

	function insertuser($username, $nome, $email, $telemovel, $pass, $morada) {
		include '../TP2/Common/connectdb.php';
		include '../TP2/Common/encrypt.php';

		$query1 = "select max(id) from utilizador;";
		$result1 = pg_exec($conn, $query1);
		$row = pg_fetch_array($result1, 0); //obter a primeira linha [0]
		$id = $row[0] + 1;

		$password = encrypt($pass);
		$query2 = "INSERT INTO utilizador (id,nome,telefone,nomeusuario, email, password, morada) VALUES (".$id.",'".$username."',".$telemovel.",'".$nome."','".$email."','".$password."','".$morada."');";


		$result2 = pg_exec($conn, $query2);
		if (!$result2) {
		  echo "An error occurred.\n";
		  exit;
		}

		pg_close($conn);

		return $result2;

	}

	function updateuser($nomeantigo, $username, $nome, $email, $telemovel, $pass, $morada) {
		include '../TP2/Common/connectdb.php';
		include '../TP2/Common/encrypt.php';

		$query1 = "select id from utilizador where nome='".$nomeantigo."';";
		$result1 = pg_exec($conn, $query1);
		$row = pg_fetch_array($result1, 0); //obter a primeira linha [0]
		$id = $row[0];

		$password = encrypt($pass);
		$query2 = "UPDATE utilizador SET nome = '".$username."', telefone = ".$telemovel.", nomeusuario = '".$username."', email = '".$email."', password= '".$password."', morada = '".$morada."' WHERE id = ".$id.";";


		$result2 = pg_exec($conn, $query2);
		if (!$result2) {
		  echo "An error occurred.\n";
		  exit;
		}

		pg_close($conn);

		return $result2;

	}

	function getadress($nome) {
		include '../TP2/Common/connectdb.php';

		$query = "select morada from utilizador where nome = '".$nome."';";


		$result = pg_exec($conn, $query);
		if (!$result) {
		  echo "An error occurred.\n";
		  exit;
		}

		$row = pg_fetch_array($result, 0); //obter a primeira linha [0]
		
		if($row!=null) {
			$name = $row[0];
		} else {
			$name = null;
		}


		pg_close($conn);

		return $name;

	}

	function getemail($nome) {
		include '../TP2/Common/connectdb.php';

		$query = "select email from utilizador where nome = '".$nome."';";


		$result = pg_exec($conn, $query);
		if (!$result) {
		  echo "An error occurred.\n";
		  exit;
		}

		$row = pg_fetch_array($result, 0); //obter a primeira linha [0]
		
		if($row!=null) {
			$name = $row[0];
		} else {
			$name = null;


		}

		pg_close($conn);

		return $name;

	}

	function getnomeusuario($nome) {
		include 'Common/connectdb.php';

		$query = "select nomeusuario from utilizador where nome = '".$nome."';";

		$result = pg_exec($conn, $query);
		if (!$result) {
		  echo "An error occurred.\n";
		  exit;
		}

		$row = pg_fetch_array($result, 0); //obter a primeira linha [0]
		
		if($row!=null) {
			$name = $row[0];
		} else {
			$name = null;
		}


		pg_close($conn);

		return $name;

	}

	function gettelemovel($nome) {
		include 'Common/connectdb.php';

		$query = "select telefone from utilizador where nome = '".$nome."';";

		$result = pg_exec($conn, $query);
		if (!$result) {
		  echo "An error occurred.\n";
		  exit;
		}

		$row = pg_fetch_array($result, 0); //obter a primeira linha [0]
		
		if($row!=null) {
			$name = $row[0];
		} else {
			$name = null;
		}


		pg_close($conn);

		return $name;

	}


?>