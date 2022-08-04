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
<a href="class1.php">GO BACK</a>
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
     $dept = mysqli_real_escape_string($link, $_REQUEST['dept']);
     $classid = mysqli_real_escape_string($link, $_REQUEST['classid']);
      $section = mysqli_real_escape_string($link, $_REQUEST['section']);
       $incharge = mysqli_real_escape_string($link, $_REQUEST['incharge']);
        $sub1 = mysqli_real_escape_string($link, $_REQUEST['sub1']);
         $sub2 = mysqli_real_escape_string($link, $_REQUEST['sub2']);
          $sub3 = mysqli_real_escape_string($link, $_REQUEST['sub3']);
           $sub4 = mysqli_real_escape_string($link, $_REQUEST['sub4']);
            $sub5 = mysqli_real_escape_string($link, $_REQUEST['sub5']);
             $sub6 = mysqli_real_escape_string($link, $_REQUEST['sub6']);
    

 
// Attempt insert query execution
$sql = "INSERT INTO class (dept,classid,section,incharge,sub1,sub2,sub3,sub4,sub5,sub6)
     VALUES ('$dept','$classid','$section','$incharge','$sub1','$sub2','$sub3','$sub4','$sub4','$sub6')";
if(mysqli_query($link, $sql)){
    echo "<h2>class added successfull!!</h2>";
} else{
    echo "<h2>Aldredy exist class!!</h2>";
}
 
// Close connection
mysqli_close($link);
?>
</body>
</html>