<?php
$server="localhost";
$username="root";
$password="";
$databasename="login_system";

$conn=mysqli_connect($server,$username,$password,$databasename);
if (!$conn) {
  die("connection failed".mysqli_connect_error());
}
else
  echo ("");

?>