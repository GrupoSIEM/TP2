<?php


session_start();

if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
      
      exit(header("Location: index.php"));
}

$username = $_SESSION['username'];
// serve the page normally.

echo "D";





?>