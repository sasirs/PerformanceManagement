<!DOCTYPE html>
<head>
<title>Login Form Design</title>
<meta name="viewport" content="width=device-width , initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

   </head>
<body>
<section class="header">

   <div class="box">
     <h1> Student Login</h1>
        <form action="" method="post">
            <p>Rollnumber</p>
            <input type="number" name="roll" placeholder="Enter rollnumber" required=""><br>

            <p>Date of birth</p>
            <input type="date" name="dob" placeholder="00-00-0000" required=""><br></br>


            <input onclick="document.getElementById('id01').style.display='block'" style="width:auto;" type="submit"  value="login" name="login">  
            <br><br>
             <a href="admin.html"><b>I am Admin?</a>
  </form>
 </div>
</section>
<?php
session_start();
$roll = $_POST['roll'];
$dob  = $_POST['dob'];
// Create connection
$con = new mysqli ("localhost","root","","perform");
if($con->connect_error) {
  die("Connect Error : ".$con->connect_error); 
}
else{
 
//Prepare statement
     $stmt = $con->prepare("select * from student where roll = ?");
     $stmt->bind_param("i", $roll);
     $stmt->execute();
     $stm_result = $stmt->get_result();
     if($stm_result->num_rows > 0){
      $data = $stm_result->fetch_assoc();
      if($data['dob'] === $dob) {
        $_SESSION['id']=$roll;
        header('location:studenthome.php?');

        
      }else {
         header('location:index.html');
      }

     }else {
      header('location:index.html');
     }
   }
   ?>

   </div>
</body>
</html>