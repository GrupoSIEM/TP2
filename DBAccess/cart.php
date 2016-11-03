<?php  


function getarticlesnumber($username){

		include 'Common/connectdb.php';

		$query = "SELECT count(idpeca) 
				from carrinho 
				where nome = '$username';";

		$result = pg_exec($conn, $query);

		$row = pg_fetch_row($result, 0); //obter a primeira linha [0]

		$numeroartigos = $row[0];

		pg_close($conn);

		return $numeroartigos;

}

function preçototal($username){

	
	include 'Common/connectdb.php';

	$query = "SELECT sum(preço)
			FROM carrinho
			INNER JOIN peças
			ON carrinho.idpeca=peças.id
			where carrinho.nome='$username';";

	$result = pg_exec($conn, $query);

	$row = pg_fetch_row($result, 0); //obter a primeira linha [0]

	$preço = $row[0];

	pg_close($conn);

	return $preço;


}




?>