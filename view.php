<!DOCTYPE html>
<html>
<head>
  <title></title>
    <link rel="stylesheet" type="text/css" href="admindash.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
 table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 90%;
  margin-top: 5%;
  margin-bottom: 5%;
  margin-left: 5%;
  overflow: auto;
}
/*table:hover{
  box-shadow: 0 0 20px 0px rgba(0,0,0,0.7);
}*/
th{
  border: 1px solid black;
 background :linear-gradient(rgb(255,255,224),  rgb(124,252,0));
  font-size: 20px;
  color: black;
  padding: 10px; 
}
td{
   font-size: 18px;
  border:1px solid black;
  color: black;
  font-weight: 300;
  background :transparent;
   padding: 5px;
   text-align: center;
}
.close1{
  position: absolute;
  right: 6%;
  top: 10px;
  font-size: 35px;
  color: red;
  cursor: pointer;
  font-weight: 700;

}

.close1:hover{
  color: green;
}
table a{
  text-decoration: none;
  padding-left: 50px;
  font-weight: 600;
  color: red;
}

.back a:hover{
  background-color: red;
    border: 5px solid red;
}
.back a{
  text-decoration: none;
  font-size: 25px;
  color: white;
  border: 5px solid green;
  background-color: green;
padding: 5px 20px;
}
</style>
</head>
<body>

</body>
</html>

<div id="id02" class="modal1">

  <form class="modal-content1" action="" method="get">
    <div class="container1">
<table>
<div class="table"> 
<tr>
  <th>S.no</th>
<th>Name</th>
<th>Roll No</th>
<th>Date of Birth</th>
<th>Mobile No</th>
<th>Semester</th>
<th>Department</th>
<th >Operation</th>
</div>
<div class="phpclass">
<?php
$conn = mysqli_connect("localhost", "root", "", "perform");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$rn=$_GET['rn'];
$sql = "SELECT * FROM student where  dept='$rn'";
$result = $conn->query($sql);
$no=1;
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
<td>" . $no. "</td>
<td>" . $row["name"]. "</td>
<td>" . $row["roll"] . "</td>
<td>". $row["dob"]. "</td>
<td>". $row["mobileno"]."</td>
<td>". $row["sem"] .  "</td>
<td>". $row["dept"] .  "</td>
<td><a href='deletestudents.php?rn=$row[roll]'>Delete</td>
</tr>";
$no++;
}
echo "</table>";
} else { echo "<h3>0 results</h3>"; }
$conn->close();
?>
<center class="back">
<a href="class1.php">back </a>
</center>
 </div>     
</table>
</div>
  </form>
</div>

</body>
</html>