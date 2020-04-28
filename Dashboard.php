<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
</head>
<body>
  <h1>"WELCOME TO DASHBOARD"</h1>
  <h2><a href="insert.php>"></a></h2>
  <table border="1px">
    <tr>
      <th>ID</th>
      <th>USERNAME</th>
      <th>PASSWORD</th>
    </tr>
<?php
include("config.php");
$sql="SELECT * FROM `admin`";
$query=mysqli_query($conn,$sql);
while ($result=mysqli_fetch_array($query)) {
?> 
    <tr>
      <td> <?php  echo $result['ID'];?></td>
      <td> <?php  echo $result['Username'];?>  </td>
      <td> <?php  echo $result['Password']; ?> </td>
    </tr>
<?php  } ?>
</table>
</body>
</html>