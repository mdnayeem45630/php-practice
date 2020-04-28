<?php
include("config.php");
if (isset($_POST['button1'])) {
   $username=$_POST['Username'];
   $password=$_POST['Password'];
   $sql="INSERT INTO admin (Username,Password) VALUES ('$username','$password')";
   $query=mysqli_query($conn,$sql);
   echo "success";
    } 
 ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <h1><a href="Dashboard.php">Dashboard</a></h1>
  <h1>INSERT HERE</h1>
  <form action="" method="POST">
    Username:<input type="text" name="Username"><br><br>
    Password:<input type="text" name="Password"><br><br>
    <input type="submit" name="button1"><br>
  </form>

</body>
</html>