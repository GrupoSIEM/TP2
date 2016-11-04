<!DOCTYPE html>
<html>
<head>
	<title>Contactos</title>
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

	<h1 align="center">Contactos</h1>
	
		
			<div class="coluna" id="colunagrifo">

			<img id='grifopic' src='https://lh3.googleusercontent.com/-3qYHaT7L-tk/WBqckdiKNoI/AAAAAAAAcCU/ypvJI9jWvbEjVwOeD4lhdrXB5QgDjhEPwCL0B/h503/2016-11-02.jpg'/>

				<div style="text-align:center;">
					<h2>Eduardo Grifo</h2>
					<h3>ee12182@fe.up.pt</h3>
				</div>



			 </div>
			<div class="coluna" id="colunaquintao">

				<img id='quintaopic' src='https://sigarra.up.pt/feup/pt/fotografias_service.foto?pct_cod=201208152'/>

				<div style="text-align:center;">
					<h2>Rafael Quintão</h2>
					<h3>ee12113@fe.up.pt</h3>
				</div>


			</div>



	</div>







</body>
</html>