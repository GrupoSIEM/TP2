<?php  


function getarticlesnumber($username){

		include 'Common/connectdb.php';

		$query = "SELECT sum(quantidade) 
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

	$query = "SELECT sum(preço*quantidade)
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

function getitemsencomenda($username){

include '../TP2/Common/connectdb.php';

	$query = "SELECT nome, idpeca, quantidade FROM carrinho where nome='$username';";

	$result = pg_exec($conn, $query);


	return $result;
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

function removeallitems($username){

	include 'Common/connectdb.php';

	$query = "DELETE FROM carrinho WHERE nome ='$username';";

	$result2 = pg_exec($conn, $query);

	pg_close($conn);

	echo "done";

}




function addtocart($idpeca, $username) {
	include '../Common/connectdb.php';

	$query1 = "SELECT max(id) from carrinho;";
	$result1 = pg_exec($conn, $query1);
		$row = pg_fetch_array($result1, 0); //obter a primeira linha [0]
		$id = $row[0] + 1;


	$query3 = "SELECT * from carrinho WHERE  nome ='$username' AND idpeca = '$idpeca' ";	

	$result3 = pg_exec($conn, $query3);

	$row = pg_fetch_array($result3); // COMANDO PARA IR BUSCAR A LINHA QUE PODERA EXISTIR

	if ($row[0]==NULL){
		
		$query2 = "INSERT INTO carrinho (id, nome, idpeca, quantidade) VALUES (".$id.",'".$username."',".$idpeca.", 1 );";


		$result2 = pg_exec($conn, $query2);
		if (!$result2) {
			echo "An error occurred.\n";
			exit;
		}

		pg_close($conn);

		return $result2;

		}

		else{

			
			$auxqtd=$row[3];
			$auxqtd=$auxqtd+1;

			$query4 = "UPDATE carrinho SET quantidade = '$auxqtd' WHERE nome ='$username' AND idpeca = '$idpeca';";

			$result4 = pg_exec($conn, $query4);

			if (!$result4) {
				echo "An error occurred.\n";
			exit;
			}
			return $result4;
		}

}



?>