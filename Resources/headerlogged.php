<!DOCTYPE html>
<html>
	<head>
		<title>RG header</title>
		<link rel="stylesheet" type="text/css" href="../Stylesheets/headerfooter.css">
	</head>

	<body>
		<header>

			<?php session_start(); ?>
			
			<div class="container">

			

      		<a href="../index.php"><img src="../Resources/headerLogo.png" class="headerLogo coluna"/></a>

      			



      			<div class="coluna" id="caixapesquisacss">
      				
				      		<form method="POST" action="Common/login.php"> 

						      		<input class="text"      
								      		id = "pesquisainput" 
											name = "caixapesquisa" 
											value="Pesquisa">
						      		

						      		


				      		</form>
				      	
	      		</div>

	      		<div class="coluna" id="colunaok">

	      			<button type="submit"> ok </button>


	      		</div>


	      		<div class="coluna" id="carrinho">


									<div class="dropdown">

								
									<button class="dropbtn" id="asd">  <!VERIFICAR ISTO E ADICIONAR A SOMA DO PREÇO>

									<?php 

										include ('../DBAccess/cart.php') ;
										
										
										$contagemArtigos = getarticlesnumber($_SESSION['username']);
										$preçototal = @preçototal($_SESSION['username']);
										 

										echo "Artigos: ".$contagemArtigos. "";
										echo "    | Total: ".$preçototal. "€";
										

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
										<a href="#">Sair</a>
									</div>
								

									</div>

				</div>


				


      		</div>
      	</header>

	</body>
</html>