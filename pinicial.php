
<!DOCTYPE html>
<html>
<head>
	<title>PG Pecas</title>
	<style>
		.center {
			margin: auto;
			width: 70%;
			padding: 4% 10px 10px 10px;
		}
	</style>
</head>
<body>


<?php

	include ('Common/sessioncheck.php');

// serve the page normally.

	include ('Resources/headerlogged.php');
	include ('Resources/footer.php');

?>

		<?php 

				$num = rand(1,7);
				echo '<div class="center"><img src="Resources/img'.$num.'.jpg" style="width:100%"><br></div>';

		;?>

</body>
</html>


