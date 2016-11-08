<?php

	function verpeças($pesq) {
		include '../TP2/Common/connectdb.php';

		$query = "select * from peças where nome like '%".$pesq."%';";


		$result = pg_exec($conn, $query);
		if (!$result) {
		  echo "An error occurred.\n";
		  exit;
		}



		return $result;

	}

	function verpeçasdestaque() {
		include '../TP2/Common/connectdb.php';

		$query = "select * from peças where destaque = true;";


		$result = pg_exec($conn, $query);
		if (!$result) {
		  echo "An error occurred.\n";
		  exit;
		}



		return $result;

	}

	function getpecas($ids) {
		include '../TP2/Common/connectdb.php';

		$pieces = explode(",", $ids);

		$query = "select link, id, nome, marca, preço from peças where id = ";
		$query.=$pieces[0];

		for ($i=1; $i < sizeof($pieces)-1; $i++) { 
			$aux=" OR id = ".$pieces[$i];
			$query.=$aux;
		}

		$query.=";";

		$result = pg_exec($conn, $query);
		if (!$result) {
		  echo "An error occurred.\n";
		  exit;
		}

		pg_close($conn);

		return $result;
	}

	function getnomepeca($id) {
		include '../TP2/Common/connectdb.php';

		$query = "select nome from peças where id = ".$id.";";


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

	function getmarcapeca($id) {
		include '../TP2/Common/connectdb.php';

		$query = "select marca from peças where id = ".$id.";";


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

	function getprecopeca($id) {
		include '../TP2/Common/connectdb.php';

		$query = "select preço from peças where id = ".$id.";";


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

	
	function getlinkpeca($id) {
		include '../TP2/Common/connectdb.php';

		$query = "select link from peças where id = ".$id.";";


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

	function getdescricaopeca($id) {
		include '../TP2/Common/connectdb.php';

		$query = "select descrição from peças where id = ".$id.";";


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