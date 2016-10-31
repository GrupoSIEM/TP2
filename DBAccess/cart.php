<?php  


function getarticlesnumber($username){

		include '../Common/connectdb.php';

		$query = "select count artigo from utilizador where nome = '".$username."';";

		$result = pg_exec($conn, $query);

		$row = pg_fetch_row($result, 0); //obter a primeira linha [0]

		$numeroartigos = $row[0];

		pg_close($conn);

		return $numeroartigos;

}

// FAZER A SOMA DO PREÇO DOS ARTIGOS QUE ESTAO NO CARRINHO PARA APRESENTAR NA PAGINA

?>