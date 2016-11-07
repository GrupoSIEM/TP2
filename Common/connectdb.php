<?php


  $conn = pg_connect("host=vdbm.fe.up.pt dbname='sinf15g31' user=sinf15g31 password=grifoquintaotiago");

  //$conn = pg_connect("host=db.fe.up.pt dbname=siem1635 user=siem1635 password=pedro");
  
  if (!$conn) {
    echo "An error occured..\n";
    exit;

    //  $query_conn = 'SET search_path to "siemphp"';  	#define o schema
	// $connect = pg_exec($conn, $query_conn);			#Selecciona o schema
  }
?>