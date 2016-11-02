<?php  


function getarticlesnumber($username){

		include '../Common/connectdb.php';

		$query = "Select count(idpeca) from carrinho where utilizador = '$username';";

		$result = pg_exec($conn, $query);

		$row = pg_fetch_row($result, 0); //obter a primeira linha [0]

		$numeroartigos = $row[0];

		pg_close($conn);

		return $numeroartigos;

}

function preçototal($username){

	
	include '../Common/connectdb.php';


	$tabelaids = getids($username);

	$i=0;

	while (!is_null(pg_fetch_row($tabelaids, $i))){

		$linha = pg_fetch_row($tabelaids, $i);

		$idpeça = $linha[0];

		echo $idpeça;

		$i=$i+1;

	}

	$query = " SELECT SUM(preço) FROM peças WHERE id IN (1, 2 )";

	$result = pg_exec($conn, $query);

	$row = pg_fetch_row($result, 0); //obter a primeira linha [0]

	$preçototal = $row[0];

	pg_close($conn);

	return $preçototal;

}

function getids($username){

	include '../Common/connectdb.php';

	$query = "Select idpeca from carrinho where utilizador = '$username';";

	$result = pg_exec($conn, $query);

	return $result;


}



?>