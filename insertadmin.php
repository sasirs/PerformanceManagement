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
    padding-left: 38%;
}
</style>

</head>
<body>
<div class="txt">
<a href="adminpage.php">GO BACK</a>
</div>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "perform");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
     $name = mysqli_real_escape_string($link, $_REQUEST['name']);
     $adminID = mysqli_real_escape_string($link, $_REQUEST['adminID']);
      $apswd = mysqli_real_escape_string($link, $_REQUEST['apswd']);
       $email = mysqli_real_escape_string($link, $_REQUEST['email']);
     $mobileno =  mysqli_real_escape_string($link, $_REQUEST['mobileno']);
          $dept = mysqli_real_escape_string($link, $_REQUEST['dept']);




 
// Attempt insert query execution
$sql = "INSERT INTO admin (name,adminID,apswd,email,mobileno,dept)
     VALUES ('$name','$adminID','$apswd','$email','$mobileno','$dept')";
if(mysqli_query($link, $sql)){
 echo "<h2>Admin added successfull!!</h2>";
}
 else{
     echo "<h2>Admin exist student!!</h2>";
}
 
// Close connection
mysqli_close($link);
?>