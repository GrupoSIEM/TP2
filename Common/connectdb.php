<?php



  $conn = pg_connect("host=db.fe.up.pt dbname=siem1639 user=siem1639 password=");
  
  if (!$conn) {
    echo "An error occured..\n";
    exit(header("Location: http://www.google.pt"));

    $query_conn = 'ALTER DATABASE siem1639 SET search_path TO siemphp;';  	#define o schema
	$connect = pg_exec($conn, $query_conn);			#Selecciona o schema

    
  }
?>