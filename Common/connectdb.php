<?php
  $conn = pg_connect("host=vdbm.fe.up.pt dbname='sinf15g31' user=sinf15g31 password=grifoquintaotiago");
  if (!$conn) {
    echo "An error occured..\n";
    exit;
  }
?>