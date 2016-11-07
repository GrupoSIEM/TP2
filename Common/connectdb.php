<?php



  $conn = pg_connect("host=db.fe.up.pt dbname=siem1639 user=siem1635 password=LmeGrjVv");
  
  if (!$conn) {
    echo "An error occured..\n";
    exit;

     $query_conn = 'SET search_path to "siemphp"';  	#define o schema
	 $connect = pg_exec($conn, $query_conn);			#Selecciona o schema
  }
?>