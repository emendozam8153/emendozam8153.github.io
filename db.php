<?php
$dbhost ="localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "proyewamemo";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
  die("no hay conexion" .mysqli_connect_error());
}
?>
