<!DOCTYPE html>
<html>
	<head>
		<title>RG header</title>
		<link rel="stylesheet" type="text/css" href="Stylesheets/headerfooter.css">
	</head>

	<body>
		<header>

			
			<div class="container">

			

      		<a href="../TP2/pinicial.php"><img src="Resources/headerLogo.png" class="headerLogo coluna"/></a>

      			

				<form method="POST" action="pesquisa.php"> 

	      			<div class="coluna" id="caixapesquisacss">
	      				
					      		

							      		<input class="text"      
									      		id = "pesquisainput" 
												name = "caixapesquisa" 
												value="Pesquisa">
							      		

							      		


					      		
					      	
		      		</div>

		      		<div class="coluna" id="colunaok">

		      			<button type="submit"> ok </button>


		      		</div>
				</form>

	      		<div class="coluna" id="carrinho">


									<div class="dropdown">

								
									<button class="dropbtn" id="asd">

									<?php 

										include ('DBAccess/cart.php') ;
										
										
										$contagemArtigos = getarticlesnumber($_SESSION['username']);
										$preçototal = @preçototal($_SESSION['username']);
										 

										echo "Artigos: ".$contagemArtigos. "";
										echo nl2br ("\n Total: ".$preçototal. "€");
										

										?>
									</button>

									<div class="dropdown-content">
										<a href="#">Pagamento</a>
										<a href="#">Ver Artigos</a>
									</div>
								

									</div>

				</div>




	      		<div class="coluna" id="usuario">


									<div class="dropdown">

									
									<button class="dropbtn" >

									<?php 

										
										echo $_SESSION['username'];

									?>
										
									</button>

									<div class="dropdown-content">
										<a href="#">Perfil</a>
										<a href="#">Encomendas</a>
										<a href="Common/logout.php">Sair</a>
									</div>
								

									</div>

				</div>


				


      		</div>
      	</header>

	</body>
</html>