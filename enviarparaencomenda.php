<?php  

	include ('Common/sessioncheck.php');
	include ('DBAccess/cart.php');
	include ('DBAccess/encomendadb.php');



	$preco =preçototal($_SESSION['username']);
	$result=getitemsencomenda($_SESSION['username']);

	$string="";
	$quantidade="";

		while ($row = pg_fetch_array($result))
					{     
					   $string.=$row["idpeca"];		//FORMATA A STRING PARA INCLUIR NA DB
					   $string.=",";
					   $quantidade.=strval($row["quantidade"]);
					   $quantidade.=",";

					} 

echo $string;
echo $quantidade;


	adicionarencomenda($_SESSION['username'], $string, $quantidade, $preco);
				  	
	removeallitems($_SESSION['username']);

	exit(header("Location: pinicial.php"));


?>