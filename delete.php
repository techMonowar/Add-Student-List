<?php
include 'header.php';
include 'connect.php';

 $id= $_GET['id'];
 $sql= "DELETE FROM studentlist WHERE id=$id ";
 mysqli_query($conn, $sql);
 header ("Location:index.php");
?>