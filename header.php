<!DOCTYPE html>
<html>

  <head>

  	<title>RG header</title>
		<link rel="stylesheet" type="text/css" href="Stylesheets/headerfooter.css">
  </head>


  <body>
		<header>
			<div class="container">

      		<img src="Resources/headerLogo.png" class="headerLogo coluna"/>

					<div class="coluna aux">

						<div class="linha">

							<div class="coluna" id="loginheader2">
								
								<div class="linha">
									<input type = "text"
						      id = "utilizadorInput"
						      value="" />
								</div>
								<div class="linha">
									<input type = "password"
						      id = "passwordInput"
						      value="" />
								</div>

								<a href="" class="botoesentrada">Entrar</a>
								<a href="" class="botoesentrada">Registar</a>
							</div>      
							
							<div class="coluna" id="loginheader1">
								
								<div class="linha" id="textologin">
									<strong>Utilizador</strong>
								</div>
								<div class="linha" id="textologin">
									<strong>Password</strong>
								</div>
					      
							</div>

						</div>

						<div class="linha">
						
							
						</div>

					</div>

			</div>
			
			

			<?php
				$query = "select * from cidade_v2;";
				$conn = pg_connect("host=db.fe.up.pt dbname=jfaria user=jfaria password=jfaria");
				if (!$conn) {
					print "ERRO: Nao foi possivel estabelecer ligacao à base de dados";
					exit;
					}
				$result = pg_exec($conn, $query);
			?>

		</header>

  </body>

</html>