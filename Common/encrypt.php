<?php

	function encrypt($password){

		$aux = md5($password);

		return $aux;

	}


?>