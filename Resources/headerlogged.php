
		<header>

			<link rel="stylesheet" type="text/css" href="Stylesheets/headerfooter.css"> 

			
			<div class="container">

			

      		<a href="../TP2/pinicial.php"><img src="Resources/headerLogo.png" class="headerLogo coluna"/></a>

      			

				<form method="POST" action="../TP2/Common/pesquisascript.php"> 

	      			<div class="coluna" id="caixapesquisacss">
	      				
					      		

							      		<input class="text"      
									      		id = "pesquisainput" 
												name = "caixapesquisa" 
												value="Pesquisa">
							      		

							      		
						<ul>
						  <li><a href="../TP2/pesquisa.php?pesq=">Artigos</a></li>
						  <li><a href="../TP2/destaques.php" style="color: white;">Destaques</a></li>
						</ul>

					      		
					      	
		      		</div>

		      		<div class="coluna" id="colunaok">

		      			<button type="submit"> ok </button>


		      		</div>
				</form>

	      		<div class="coluna" id="carrinho" style="overflow: visible;">


									<div class="dropdown" style="overflow: visible;">

								
									<button class="dropbtn" id="asd" style="overflow: visible;">

									<?php 

										include ('DBAccess/cart.php') ;
										
										
										$contagemArtigos = getarticlesnumber($_SESSION['username']);
										$preçototal = sprintf('%0.2f', @preçototal($_SESSION['username']));
										 
										
										echo "Artigos: ".$contagemArtigos. "";
										echo '<img src="../TP2/Resources/cart.png" class="carrinho" style=" padding: 0 0 0 10px; width: auto; height: 50%;"/>';
										echo nl2br ("\n Total: ".$preçototal. "€");
										

										?>
									</button>

									<div class="dropdown-content">
										<a href="vercarrinho.php">Ver Artigos</a>
										<a href="pagamento.php">Pagamento</a>
										
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
										<a href="perfil.php">Perfil</a>
										<a href="verencomendas.php">Encomendas</a>
										<a href="Common/logout.php">Sair</a>
									</div>
								

									</div>

				</div>


				


      		</div>
      	</header>
