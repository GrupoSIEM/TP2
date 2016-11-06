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
	include ('Resources/footer.php');
?>
	<div class="coluna" id="containerimagemesquerda">
		<img src="Resources/pay.png" id="pay"></img>
	</div>

	<div class="coluna" id="containergeral">
		
		<table>
				  <tr>
				    <th colspan="2">Dados do cartão</th>
				  </tr>
				  <tr>
				    <td width="50%"></td><td width="50%"></td>
				  </tr>
				  <tr>
				    <td width="50%">Nome indicado no cartão:</td><td width="50%">CVC/CDV2:</td>
				  </tr>
				  <tr>
				    <td width="50%" id="temdados">
				    	<input class="text" id="NOMECARTAO" value=""></input>
				    </td>
				    <td width="50%" id="temdados">
				    	<input class="text" id="CVC" value=""></input>
				    </td>
				  </tr>
				  <tr>
				    <td width="50%">Data de validade:</td>
				    <td width="50%"></td>
				  </tr>
				  <tr>
				  	<td width="50%" id="temdados">
				  		  <input type="month" /> 
				  	</td>
				    <td width="50%" id="temdados">
				    	
				    </td>
				  </tr>
				 
				  <tr>
				    <td width="100%" colspan="2"><button type = "submit" id="botaopagar">Efetuar Pagamento</button></td>
				  </tr>
							  
				</table>

	</div>

	<div class="coluna" id="containerimagemdireita">
		<img src="Resources/pay2.png" id="pay2"></img>
	</div>

</body>
</html>