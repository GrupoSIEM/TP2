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

function getitemscart($username){

	include '../TP2/Common/connectdb.php';

	$query = "SELECT * FROM carrinho
			 INNER JOIN peças 
			 ON carrinho.idpeca=peças.id
			 where carrinho.nome='$username';";

	$result = pg_exec($conn, $query);


	return $result;
}

function removefromcart($id){

	include '../Common/connectdb.php';


	$query2 = "DELETE FROM carrinho WHERE id=".$id.";";


	$result2 = pg_exec($conn, $query2);
	if (!$result2) {
		echo "An error occurred.\n";
		exit;
	}

	pg_close($conn);

	return $id;

}




function addtocart($idpeca, $username) {
	include '../Common/connectdb.php';

	$query1 = "select max(id) from carrinho;";
	$result1 = pg_exec($conn, $query1);
		$row = pg_fetch_array($result1, 0); //obter a primeira linha [0]
		$id = $row[0] + 1;

		$query2 = "INSERT INTO carrinho (id, nome, idpeca) VALUES (".$id.",'".$username."',".$idpeca.");";


		$result2 = pg_exec($conn, $query2);
		if (!$result2) {
			echo "An error occurred.\n";
			exit;
		}

		pg_close($conn);

		return $result2;

}


?>