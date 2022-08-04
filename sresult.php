<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="widtd=device-widtd, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="shome.css">
<style type="text/css">
.result  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 60%;
  margin-top: 1%;
  margin-bottom: 3%;
  margin-left: 20%;
  box-shadow: 0 0 10px 0px rgba(0,0,0,0.9);
  overflow: hidden;
  border-radius: 20px;
}

 .result  td{
  font-size: 20px;
  color: black;
  padding: 10px; 
  text-align: left;
  font-weight: 600;
  border: 1px solid  black;
 background :linear-gradient(rgb(255,255,255), rgb(255,255,0));
} 
.result  th{
	font-size: 22px;
  color: black;
   background-color: white;
  padding: 10px; 
  text-align: center;
  font-weight: 600;
  border: 1px solid black;
}

.result .box{
	overflow: auto;
}
h2{
	text-align: center;
	color: black;
}
@media screen and (max-width: 600px) {
	.result  table {
		width: 80%;
		margin-left: 10%;
		border-radius: 15px;
	}
  
}
</style>
</head>
<body>
<span id="welcome">WELCOME!!</span>
<div class="topnav" id="myTopnav">
 <a id="first"   href="studenthome.php" >Home</a>
  <a href="sresult.php" class="active" > Perfomence</a>
  <a  id="logout" href="logout.php" ><i class="fa fa-sign-out"></i>Logout</a>
  </a>
</div>
<div class="result">
 <?php
session_start();
$roll=$_SESSION['id'];
$conn = mysqli_connect("localhost", "root", "", "perform");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$result1 = mysqli_query($conn,"SELECT * FROM perfomence WHERE roll='$roll'");
?>
<div class="box">
<?php
if ($result1->num_rows > 0) {
$row1= mysqli_fetch_array($result1);
}
else{
 echo " <h2>Result Not Declared !! !!</h2>"; 
exit();
}
?>
<table class="first">
<h2>Marks</h2>
<th>subects</th>
<th>Grads</th>
</tr>
<td><?php echo $row1["sn1"]?></td>
<td><?php echo $row1["sub1"]?></td>
</tr>
<td><?php echo $row1["sn2"]?></td>
<td><?php echo $row1["sub2"]?></td>
</tr>
<td><?php echo $row1["sn3"]?></td>
<td><?php echo $row1["sub3"]?></td>
</tr>
<td><?php echo $row1["sn4"]?></td>
<td><?php echo $row1["sub4"]?></td>
</tr>
<td><?php echo $row1["sn5"]?></td>
<td><?php echo $row1["sub5"]?></td>
</tr>
<td><?php echo $row1["sn6"]?></td>
<td><?php echo $row1["sub6"]?></td>
</tr>
</table>
<table class="seconds">
<h2>Attendence</h2>
<td>Total Working Days</td>
<td><?php echo $row1["workday"]?></td>
</tr>
<td>Total Present Days</td>
<td><?php echo $row1["preday"]?></td>
</tr>
<td>Attendence Percentage </td>
<td><?php echo $row1["percentage"]?></td>
</tr>
</table>
<table  class="third">
<h2>Feedbacks</h2>
<td>Feedback </td>
<td><?php echo $row1["feedback"]?></td>
</tr>
</table>
</div>
</div>
</body>
</html>