<!DOCTYPE html>
<html>
<head>
	<title>
		RG Peças
	</title>

	<link rel="stylesheet" type="text/css" href="Stylesheets/pagamento.css">

</head>
<body>

<?php
	
	include ('Common/sessioncheck.php');

// serve the page normally.

	include ('Resources/headerlogged.php');
	
	include ('DBAccess/user.php');

?>
	<div class="coluna" id="containerimagemesquerda">
		<img src="Resources/pay.png" id="pay"></img>
	</div>

	<div class="coluna" id="containergeral">


	Possui no seu carrinho um total de 

	<?php $contagemArtigos = getarticlesnumber($_SESSION['username']);
		echo $contagemArtigos;
	 ?> artigos num valor total de
	  <?php  $preçototal = sprintf('%0.2f', @preçototal($_SESSION['username']));
	  	echo $preçototal; 
	  ?>

	  €. Por favor confirme os artigos no carrinho e a morada de envio antes de prosseguir. <br><br>

	  

	

<form method="POST" action="enviarparaencomenda.php">
		
		<table>
				  <tr>
				    <th colspan="2">Dados do cartão</th>
				  </tr>
				  <tr>
				    <td width="50%"></td><td width="50%"></td>
				  </tr>
				  <tr>
				    <td width="90%" colspan="2">Nome indicado no cartão:</td>
				  </tr>
				  <tr>
				    <td width="90%" colspan="2" id="temdados">
				    	<input class="text" id="NOMECARTAO" value=""></input>
				    </td>
				    
				  </tr>
				  <tr>
				    <td width="90%" colspan="2">Número do cartão:</td>
				  </tr>
				  <tr>
				    <td width="90%" colspan="2" id="temdados">
				    	<input class="text" id="NOMECARTAO" value=""></input>
				    </td>
				    
				  </tr>
				  <tr>
				    <td width="60%">Data de validade:</td>
				    <td width="40%">CVC/CDV2:</td>
				  </tr>
				  <tr>
				  	<td width="70%" id="temdados">
				  		  <input type="month" /> 
				  	</td>
				    <td width="30%" id="temdados">
				    	<input class="text" width="100%" id="CVC" value=""></input>
				    </td>
				  </tr>
				 
				  <tr>
				    <td width="100%" colspan="2"><button type = "submit" id="botaopagar">Efetuar Pagamento</button></td>
				  </tr>
							  
				</table>
	</form>

	<h4>Morada de envio:</h4>

	  <h5>

	  <?php $morada = getadress($_SESSION['username']);
	  echo $morada;
	   ?>
	   	 
	   </h5>

	</div>

	<div class="coluna" id="containerimagemdireita">
		<img src="Resources/pay2.png" id="pay2"></img>
	</div>

	<?php include ('Resources/footer.php'); ?>

</body>
</html>