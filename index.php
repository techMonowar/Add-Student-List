<?php
include 'header.php';
include 'connect.php';

?>
</head>
<body>

<div class="container">
  
<table class="table mt-8">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Mobile No.</th>
      <th scope="col">Email</th>
      <th scope="col">Father's Name</th>
      <th scope="col">Gender</th>
      <th scope="col">College Name</th>
      <th scope="col">Permanent Address</th>
      <th scope="col">Residential Address</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql = "SELECT * FROM studentlist ";
  $result = mysqli_query($conn,$sql); 
      while($row=mysqli_fetch_array($result)){


?>       
  <tr>
  <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
  <td><?php echo $row['mobile']; ?></td>
  <td><?php echo $row['email']; ?></td>
  <td><?php echo $row['fathername']; ?></td>
  <td><?php echo $row['gender']; ?></td>
  <td><?php echo $row['collegename']; ?></td>
  <td><?php echo $row['paddress']." ".$row['ppostoffice']." ".$row['pdistrict']." ".$row['pstate']." ".$row['ppin']; ?></td>
  <td><?php echo $row['raddress']." ".$row['rpostoffice']." ".$row['rdistrict']." ".$row['rstate']." ".$row['rpin']; ?></td>
  <td><button type="button" class="btn btn-primary "><a href="update.php?id=<?php echo $row['id'];?>" class="text-white">Update</a></button></td>
  <td><button type="button" class="btn btn-danger"><a href="delete.php?id=<?php echo $row['id'];?>" class="text-white" >Delete</a></button></td>
  
</tr>
      
<?php
      }
?>
  

    
    
  </tbody>
</table>
</div>
<script src="script.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>