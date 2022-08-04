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
<a href="perfomence.php">GO BACK</a>
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
         $roll = mysqli_real_escape_string($link, $_REQUEST['roll']);
         $name = mysqli_real_escape_string($link, $_REQUEST['name']);
        $sub1 = mysqli_real_escape_string($link, $_REQUEST['sub1']);
         $sub2 = mysqli_real_escape_string($link, $_REQUEST['sub2']);
          $sub3 = mysqli_real_escape_string($link, $_REQUEST['sub3']);
           $sub4 = mysqli_real_escape_string($link, $_REQUEST['sub4']);
            $sub5 = mysqli_real_escape_string($link, $_REQUEST['sub5']);
             $sub6 = mysqli_real_escape_string($link, $_REQUEST['sub6']);
             $workday = mysqli_real_escape_string($link, $_REQUEST['workday']);
             $preday = mysqli_real_escape_string($link, $_REQUEST['preday']);
             $percentage = mysqli_real_escape_string($link, $_REQUEST['percentage']);
             $feedback = mysqli_real_escape_string($link, $_REQUEST['feedback']);
             $sn1 = mysqli_real_escape_string($link, $_REQUEST['sn1']);
             $sn2 = mysqli_real_escape_string($link, $_REQUEST['sn2']);
             $sn3 = mysqli_real_escape_string($link, $_REQUEST['sn3']);
             $sn4 = mysqli_real_escape_string($link, $_REQUEST['sn4']);
              $sn5 = mysqli_real_escape_string($link, $_REQUEST['sn5']);
               $sn6 = mysqli_real_escape_string($link, $_REQUEST['sn6']);
         
            

// Attempt insert query execution
$sql = "INSERT INTO perfomence (roll,name,sub1,sub2,sub3,sub4,sub5,sub6,workday,preday,percentage,feedback,sn1,sn2,sn3,sn4,sn5,sn6)
     VALUES ('$roll','$name','$sub1','$sub2','$sub3','$sub4','$sub4','$sub6','$workday','$preday','$percentage','$feedback','$sn1','$sn2','$sn3','$sn4','$sn5','$sn6')";
if(mysqli_query($link, $sql)){
    echo "<h2>perfomence added successfull!!</h2>";
} else{
  echo "<h2>perfomence added failed!!</h2>";
   }
 
// Close connection
mysqli_close($link);
?>
</body>
</html>