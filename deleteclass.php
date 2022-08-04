<!DOCTYPE html>
<html>
<head>
	
	<title></title>
	<style >
	.txt{
		font-size: 20px;
	}
  a:link, a:visited {
  background-color: #32A852;
  color: white;
  margin-left: 40%;
 border-radius: 10px;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
h2{
	padding-left: 37%;
	padding-top: 10%;
</style>

</head>
<body>
	<h2> Record succesfully deleted!!</h2>
<div class="txt">
<a href="class1.php">GO BACK</a>
</div>

<?php
$conn = mysqli_connect("localhost", "root", "", "perform");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$rn=$_GET['rn'];
$query="DELETE FROM class  where dept='$rn'";
$data=mysqli_query($conn,$query);
if($data)
{
	
}
else{
	echo "failed to delete";
}
?>
</body>
</html>