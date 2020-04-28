<?php
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect()($servername,$username, $password);
if (!conn) {
  die("not connect".mysqli_connect_error());
} else {
  echo "connected";
}



?>