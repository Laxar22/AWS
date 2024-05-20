<?php
$hostname="localhost";
$dbusername="root";
$dbpassword="";
$database="aws";

$conn=new mysqli($hostname,$dbusername,$dbpassword,$database);

if ($conn->connect_error) {
  die("Connessione fallita: " . $conn->connect_error);
} 

?>