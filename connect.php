<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "studendata";
 
$conn =mysqli_connect ($serverName,$userName,$password,$dbName);

if (!$conn) {
  die("<script>alert('Database Connection Failed.')</script>");
}

?>