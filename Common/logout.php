
<?php 

	if(isset($_COOKIE[session_name()])):
        setcookie(session_name(), '', time()-7000000, '/');
    	header("Location: ../index.php" );
    endif;

?>

