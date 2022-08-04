<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="widtd=device-widtd, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="shome.css">
</head>
<body>
<span id="welcome">WELCOME!!</span>
<div class="topnav" id="myTopnav">
 <a id="first"  class="active" href="studenthome.php" >Home</a>
  <a href="sresult.php" > Perfomence</a>
  <a  id="logout" href="logout.php" ><i class="fa fa-sign-out"></i>Logout</a>
  </a>
</div>
<div class="box">
<form method="post">
  <?php
session_start();
$roll=$_SESSION['id'];
$conn = mysqli_connect("localhost", "root", "", "perform");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$result1 = mysqli_query($conn,"SELECT * FROM student WHERE roll='$roll'");
$row1= mysqli_fetch_array($result1);
?>
<table>
<tr>
<td>Name:</td>
<td><?php echo $row1['name']; ?></td>
</tr>
<tr>
<td>Register Number:</td>
<td><?php echo $row1['roll']; ?></td>
</tr>
<td>Department:</td>
<td><?php echo $row1['dept']; ?></td>
</tr>
<td>Semester:</td>
<td><?php echo $row1['sem']; ?></td>
</tr>
<td>Mobile Number:</td>
<td><?php echo $row1['mobileno'];?></td>
</tr>
</table>
<center>
<button ><a href="sresult.php">Perfomencs</a></button>

</center>
</form>
</div>
<div class="last">
        <p>Made with<i class="fa fa-heartbeat" ></i>Sasikumar</p>
    </div>
</body>
</html>