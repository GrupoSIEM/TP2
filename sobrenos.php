<!DOCTYPE html>
<html>
<head>
	<title>About us!</title>
	<link rel="stylesheet" type="text/css" href="Stylesheets/sobrenos.css">
</head>
<body>

<?php 

	session_start();

	if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
	      
	     include ('Resources/header.php');
	}
	else{

		include ('Resources/headerlogged.php');

	}



include ('Resources/footer.php');
?>



	<div class="container" id="sobrenos">

	Este website foi desenvolvido no âmbito da disciplina de Sistemas de Informação Empresariais. Em baixo estão os responsáveis pelo desenvolvimento do deste. 
	
		
			<div class="coluna" id="colunagrifo">

			<img id='grifopic' src='https://lh3.googleusercontent.com/-3qYHaT7L-tk/WBqckdiKNoI/AAAAAAAAcCU/ypvJI9jWvbEjVwOeD4lhdrXB5QgDjhEPwCL0B/h503/2016-11-02.jpg'></img>



			 </div>
			<div class="coluna" id="colunaquintao">

			<img id='quintaopic' src='https://sigarra.up.pt/feup/pt/fotografias_service.foto?pct_cod=201208152'></img>



			</div>



	</div>







</body>
</html>