<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$servername = "localhost";
$username = "u406245781_Mric";
$password = "Aymeric@1234";
$dbname = "u406245781_pene";
$datetime = date("Y-m-d h:i:sa");
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " .mysqli_connect_error());
} else {
  //echo "ok";
}

?>