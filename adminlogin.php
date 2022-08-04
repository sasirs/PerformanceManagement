<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style >
        body{
            background-color: #E6E6FA;
        }
    .txt{
        font-size: 20px;
    }
  a:link, a:visited {
  background-color: #32A852;
  color: white;
  margin-left: 40%;
 margin-top: 15%;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 10px;
}

a:hover, a:active {
  background-color: red;
}
h2{
    padding-left: 40%;
}
</style>

</head>
<body>
<div class="txt">
<a href="admin.html">GO BACK</a>
</div>
<?php
session_start();
$adminID = $_POST['adminID'];
$apswd  = $_POST['apswd'];
// Create connection
$con = new mysqli ("localhost","root","","perform");
if($con->connect_error) {
  die("Connect Error : ".$con->connect_error); 
}
else{
 
//Prepare statement
     $stmt = $con->prepare("select * from admin where adminID = ?");
     $stmt->bind_param("i", $adminID);
     $stmt->execute();
     $stm_result = $stmt->get_result();
     if($stm_result->num_rows > 0){
      $data = $stm_result->fetch_assoc();
      if($data['apswd'] === $apswd) { 
       $_SESSION['ad']=$adminID;
        header('location:admindash.php?');
      }else {
        echo "<h2>invalid data!!</h2>";
      }

     }else {
      echo "<h2>Acces denied</h2>";
     }
     }
          ?>
</body>
</html>