<?php
include 'connect.php';

if (isset($_POST['submit'])){
  $firstname =$_POST['fname'];
  $lastname =$_POST['lname'];
  $mobile =$_POST['phone'];
  $email =$_POST['email'];
  $fathername =$_POST['fathername'];
  $gender =$_POST['gender'];
  $collegename =$_POST['collegename'];
  $paddress =$_POST['paddress'];
  $ppostoffice =$_POST['ppostoffice'];
  $pdistrict =$_POST['pdistrict'];
  $pstate =$_POST['pstate'];
  $ppin =$_POST['ppin'];
  $raddress =$_POST['raddress'];
  $rpostoffice =$_POST['rpostoffice'];
  $rdistrict =$_POST['rdistrict'];
  $rstate =$_POST['rstate'];
  $rpin =$_POST['rpin'];


  if ($firstname!="" && $lastname!="" && $mobile!="" ){
    $sql = "SELECT * FROM studentlist WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if($result){
			$q = "SELECT * FROM studentlist WHERE mobile='$mobile'";
			$result = mysqli_query($conn,$q);
		if (!$result->num_rows > 0) {
      $sql = "INSERT INTO studentlist (firstname, lastname, mobile, email, fathername, gender, collegename, paddress, ppostoffice, pdistrict, pstate, ppin, raddress, rpostoffice, rdistrict, rstate, rpin)
      VALUES ('$firstname','$lastname','$mobile','$email','$fathername','$gender', '$collegename','$paddress','$ppostoffice','$pdistrict','$pstate','$ppin','$raddress','$rpostoffice','$rdistrict','$rstate','$rpin')";

      $result=mysqli_query($conn,$sql);
      if ($result) {
      echo "<script>alert('Wow! User Registration Completed.')</script>";
  
  
      } else {
       echo "<script>alert('Woops! Database Errort.')</script>";
       }
}else{
  echo "<script>alert('Email or Mobile No. Already Exists.')</script>";
}
       
  }
}else{
  echo "<script>alert('Empty! Please Fill All The Required Filled.')</script>";
}
}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">

	<title>Monowar Login Form</title>
    
</head>
<header>
<nav class="navbar navbar-expand bg-light navbar-light navbar-fixed-top ">
  <a class="navbar-brand" href="index.php">Monowar</a>
  <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
      <button type="button" class="btn btn-primary mx-2" onclick="window.location.href='add.php';">Add Student</button>
      <button type="button" class="btn btn-primary" onclick="window.location.href='index.php';">Dashboard</button>
 </ul>
</nav>

</header>
<body>





    <div class="container">
        <div class="header">
            <h2>Add Students</h2> 
        <h4>A Form to Add Students, Update,Delete and List student Data.</h4>
            <h5>C-DAC Assignment-01 by  Monowar Hussain</h5>
        </div>

            <div class="form" id="form">
              <form action="" onsubmit="" method="POST">

                  <div class="form-control1 ">
                  <label>First Name</label>
                  <input type="text"  id="fname" name="fname" placeholder="Enter Your First Name" required>
                  <i class="fa-solid fa-circle-exclamation"></i>
                  <i class="fa-solid fa-circle-check"></i>
                  <small>error msg</small></div>

                  <div class="form-control1 ">
                  <label>Last Name</label>
                  <input type="text"  id="lname" name="lname" placeholder="Enter Your Last Name"required >
                  <i class="fa-solid fa-circle-exclamation"></i>
                  <i class="fa-solid fa-circle-check"></i>
                  <small>error msg</small></div>

                  <div class="form-control1">
                  <label>Mobile Number</label>
                  <input type="number"  id="phone"  name="phone" placeholder="Enter Your Mobile Number"required >
                  <i class="fa-solid fa-circle-exclamation"></i>
                  <i class="fa-solid fa-circle-check"></i>
                  <small>error msg</small></div>

                  <div class="form-control1">
                  <label>Email</label>
                  <input type="email"  id="email" name="email" placeholder="Enter Your Email ID" required>
                  <i class="fa-solid fa-circle-exclamation"></i>
                  <i class="fa-solid fa-circle-check"></i>
                  <small>error msg</small></div>

                  <div class="form-control1">
                  <label>Father's Name</label>
                  <input type="text"  id="fathername" name="fathername"  placeholder="Enter Your Father's Name"required >
                  <i class="fa-solid fa-circle-exclamation"></i>
                  <i class="fa-solid fa-circle-check"></i>
                  <small>error msg</small></div>

                  <div class="form-control1">
                  <label>Gender</label>
                  <input type="text"  id="gender" name="gender" placeholder="Enter Your Gender"required >
                  <i class="fa-solid fa-circle-exclamation"></i>
                  <i class="fa-solid fa-circle-check"></i>
                  <small>error msg</small></div>

                  <div class="form-control1">
                  <label>College Name</label>
                  <input type="text"  id="collegename" name="collegename" placeholder="Enter Your College Name"required >
                  <i class="fa-solid fa-circle-exclamation"></i>
                  <i class="fa-solid fa-circle-check"></i>
                  <small>error msg</small></div>
            
                  <!--Residential Addres-->
                <div class="float-container">
                  <div class="raddress" >
                    <div class="raddressHeader"><h3>Residential Address</h3>
                    </div>
                    

                    <div class="form-control1">
                    <label>Adress</label>
                    <input type="text"  id="raddress" name= "raddress" placeholder="Enter Your Address" required>
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <i class="fa-solid fa-circle-check"></i>
                    <small>error msg</small></div>

                  <div class="form-control1">
                  <label>Post Office</label>
                  <input type="text"  id="rpostoffice" name="rpostoffice"  placeholder="Enter Your Post Office" required>
                  <i class="fa-solid fa-circle-exclamation"></i>
                  <i class="fa-solid fa-circle-check"></i>
                  <small>error msg</small></div>

                  <div class="form-control1">
                  <label>District</label>
                  <input type="text"  id="rdistrict" name="rdistrict" placeholder="Enter Your District Name"required >
                  <i class="fa-solid fa-circle-exclamation"></i>
                  <i class="fa-solid fa-circle-check"></i>
                  <small>error msg</small></div>

                  <div class="form-control1">
                  <label>State</label>
                  <input type="text"  id="rstate" name="rstate" placeholder="Enter Your State Name" required>
                  <i class="fa-solid fa-circle-exclamation"></i>
                  <i class="fa-solid fa-circle-check"></i>
                  <small>error msg</small></div>

                  <div class="form-control1">
                  <label>Pin</label>
                  <input type="number"  id="rpin" name="rpin" placeholder="Enter Your PIN " required>
                  <i class="fa-solid fa-circle-exclamation"></i>
                  <i class="fa-solid fa-circle-check"></i>
                  <small>error msg</small></div>

                  </div>

                 <!--Permanent Addres-->

                  <div class="paddress" >
                    <div class="paddressHeader"><h3>Permanent Address</h3>
                        <input type="checkbox" id="checkBox" name="checkBox" onchange="addressFunction()"> Same as Residential</div>
                    
                    <div class="form-control1">
                    <label>Adress</label>
                    <input type="text"  id="paddress" name="paddress" placeholder="Enter Your Address" required>
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <i class="fa-solid fa-circle-check"></i>
                    <small>error msg</small></div>

                    <div class="form-control1">
                    <label>Post Office</label>
                  <input type="text"  id="ppostoffice" name="ppostoffice" placeholder="Enter Your Post Office" >
                  <i class="fa-solid fa-circle-exclamation"></i>
                  <i class="fa-solid fa-circle-check"></i>
                  <small>error msg</small></div>

                  <div class="form-control1">
                  <label>District</label>
                  <input type="text"  id="pdistrict" name="pdistrict" placeholder="Enter Your District Name" required>
                  <i class="fa-solid fa-circle-exclamation"></i>
                  <i class="fa-solid fa-circle-check"></i>
                  <small>error msg</small></div>

                  <div class="form-control1">
                  <label>State</label>
                  <input type="text"  id="pstate" name="pstate" placeholder="Enter Your State Name"required >
                  <i class="fa-solid fa-circle-exclamation"></i>
                  <i class="fa-solid fa-circle-check"></i>
                  <small>error msg</small></div>

                  <div class="form-control1">
                  <label>Pin</label>
                  <input type="number"  id="ppin" name="ppin" placeholder="Enter Your PIN "required >
                  <i class="fa-solid fa-circle-exclamation"></i>
                  <i class="fa-solid fa-circle-check"></i>
                  <small>error msg</small></div>
                  </div>
                </div>


                <button name="submit" class="btn">Submit</button>


 
              </form>  
            </div>
</div> 
    

        


    <script src="script.js"></script> 
</body>
</html>

