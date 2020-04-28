<?php
$server="localhost";
$username="root";
$password="";
$databasename="loginsystem";
$conn=mysqli_connect($server,$username,$password,$databasename);

if (!conn) {
  die("connection failed".mysqli_connect());
}
else
  echo ("connected");

?>