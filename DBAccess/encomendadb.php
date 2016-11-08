<?php 


function adicionarencomenda($nome, $ids, $quantidades, $preço){
	include '../TP2/Common/connectdb.php';
	include '../TP2/Common/encrypt.php';

	$query1 = "select max(id) from encomenda;";
	$result1 = pg_exec($conn, $query1);
		$row = pg_fetch_array($result1, 0); //obter a primeira linha [0]
		$id = $row[0] + 1;

		$time=time();
		$datapagamento=date('Y-m-d H:i:s',$time - (1*60*60));
		$dataentrega=date('Y-m-d',$time + (15 * 24 * 60 * 60));

		$query2 = "INSERT INTO encomenda (id,nome,datapagamento,dataentrega, idspeças, quantidades, preço) VALUES (".$id.",'".$nome."','".$datapagamento."','".$dataentrega."','".$ids."','".$quantidades."',".$preço.");";


		$result2 = pg_exec($conn, $query2);
		if (!$result2) {
			echo "An error occurred.\n";
			exit;
		}

		pg_close($conn);

		return $result2;

}

function getencomendas($username){

	include '../TP2/Common/connectdb.php';

	$query = "SELECT * FROM encomenda where nome='".$username."';";

	$result = pg_exec($conn, $query);


	return $result;
}


 ?>