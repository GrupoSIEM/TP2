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
					

					<form method="POST" action="Common/login.php">
						<div class="coluna aux">

							<div class="linha">

								<div class="coluna" id="loginheader2">
									
									<div class="linha">
										<input type = "text" id = "utilizadorInput" name = "caixauser" value=""></input>
									</div>
									<div class="linha">
										<input type = "password"
										name = "caixapassword"
							      id = "passwordInput"
							      value="" />
									</div>
									<button type = "submit" class="botoesentrada" name="cmdsubmit" value="login">Entrar</button>
									<button type = "submit" class="botoesentrada" name="cmdsubmit" value="registar">Registar</button>
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

					</form>

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