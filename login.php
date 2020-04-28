<?php
include("config.php");
if ($_SERVER["REQUEST_METHOD"]=="POST") {
  $username=mysqli_real_escape_string($conn,$_POST['username']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);
  $sql="SELECT id FROM admin WHERE Username='$username' AND Password='$password'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
  $id=$row['id'];
  $count=mysqli_num_rows($result);
  if ($count==1) {
    header("location:dashboard.php");
    //echo "You are in";
  }
  else{
    echo "id not found";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <center>
  <h1>Input your username and password</h1>
  <form action="" method="POST">
    username: <input type="text" name="username"><br>
    password:<input type="text" name="password"><br>
    <input type="submit" name="btn1">
  </form>
  </center>

</body>
</html>