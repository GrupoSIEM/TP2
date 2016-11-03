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

	

?>