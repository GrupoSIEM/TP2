<?php  

	include ('Common/sessioncheck.php');
	include ('DBAccess/cart.php');




	//removeallitems($_SESSION['username']); //TA A FUNCIONAR. COMENTADO PARA TESTES

	$preco =preçototal($_SESSION['username']);
	$result=getitemsencomenda($_SESSION['username']);

	$string="";
	$quantidade="";

		while ($row = pg_fetch_array($result))
					{     
					   $string.=$row["idpeca"];		//FORMATA A STRING PARA INCLUIR NA DB
					   $string.=",";  
					   $quantidade=$row["quantidade"];
					   $quantidade=",";

					} 

echo $string;
echo $quantidade;


	adicionarencomenda($_SESSION['username'], $preço);
				  	


	//header("Location: pinicial.php");


?>