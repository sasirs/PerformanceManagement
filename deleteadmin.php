
<?php
$conn = mysqli_connect("localhost", "root", "", "perform");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$rn=$_GET['rn'];
$query="DELETE FROM admin  where adminID='$rn'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "<script>alert('deleted Sucessfully');</script>";
}
else{
	echo "<script>alert('Failed to delete ');</script>";
}
?>
</body>
</html>