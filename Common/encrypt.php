<?php

function encrypt($password){

	$aux = md5($password);

	echo $aux;

return $aux;

}


?>