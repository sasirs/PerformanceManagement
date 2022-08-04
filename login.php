<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
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
       echo "$error";
         header('location:index.html');


      }

     }else {
       echo "$error";
      header('location:index.html');
     }
   }
   ?>
   <script type="text/javascript">
     $error=swal("Good job!", "You clicked the button!", "success");
   </script>
</body>
</html>