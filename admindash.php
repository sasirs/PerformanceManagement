<?php 

$con = new mysqli ("localhost","root","","perform");
if($con->connect_error) {
  die("Connect Error : ".$con->connect_error); 
}
session_start();
$ad=$_SESSION['ad'];
$result = mysqli_query($con,"SELECT * FROM admin WHERE adminID='$ad'");
$row= mysqli_fetch_array($result);

$qq=mysqli_query($con,"select * from class ");
$rows=mysqli_num_rows($qq);     

 $q=mysqli_query($con,"select * from student");
$r1=mysqli_num_rows($q);      
//all users
$q2=mysqli_query($con,"select * from perfomence");
$r2=mysqli_num_rows($q2);     
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="file:///C:/xampp/htdocs/perfomence/fontawesome-free-5.15.3-web/css/all.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" type="text/css" href="admindash.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
 <div class="sidesec">
    <div class="header">
    <p id="name"><?php echo ucfirst($row['name']); ?></p><h1>Admin page!!</h1>
        <a href="logout.php"><i class="fa fa-sign-out" ></i>logeout</a>
    </div>
     <nav class="sidebar">
            <div class="nav-link">    
                <ul>
                    <li  class="active" ><i class="fa fa-home"><a href="admindash.php" >Home</a></i></li>
                   <li><i class="fa fa-columns" ></i><a href="class1.php" >Class </a></li>
                   <li><i class="fa fa-graduation-cap"></i><a href="students.php" >Students</a></li>
                   <li><i class="fa fa-bar-chart-o" ></i><a href="perfomence.php" >Perfomence</a></li>
                     <li><i class="fa fa-cogs" ></i><a href="adminpage.php" >Admin settings</a></li>

                </ul>
            </div>
    </nav>
     <div class="home">
        <button class="b1">Total students <i class="fa fa-user-o" ></i></i><div id="b"><?php   echo"$r1"?><br></div></button>   
        <button  class="b2">Total Class <i class="fa fa-tags"></i><div id="b"><?php   echo"$rows"?> <br></div></button> 
        <button  class="b3"> Perfomencs <i class="fa fa-line-chart"></i><div id="b"><?php   echo"$r2"?><br></div></button> 
    </div>
    <div class="last">
        <span><p>Made with<i class="fa fa-heartbeat" ></i>Sasikumar</p></span>
    </div>
    </div>
</body>
</html>
