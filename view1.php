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
  font-size: 20px
}
button{
  border: 1px solid green;
  background: green;
  padding: 10px 32px;
  border-radius: 5px;
  
}
button:hover{
   background: blue;
   border: 1px solid blue;
}
button a{
  text-decoration: none;
  font-size: 20px;
  color: white;
}
</style>
</head>
<body>

<div id="id02" class="modal1">

  <form class="modal-content1" action="" method="get">
    <div class="container1">
<table>
<div class="table"> 
<tr>
  <th>S.no</th>
<th>Name</th>
<th>Roll No</th>
<th>Email</th>
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
$dept=$_GET['rn'];
$sql = "SELECT * FROM student where  dept='$dept'";
$result = $conn->query($sql);
$no=1;
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
<td>" . $no. "</td>
<td>" . $row["name"]. "</td>
<td>" . $row["roll"] . "</td>
<td>". $row["email"]. "</td>
<td>". $row["mobileno"]."</td>
<td>". $row["sem"] .  "</td>
<td>". $row["dept"] .  "</td>
<td><a href='addperfomence.php?rn=$row[roll]&&dept=$row[dept]&&name=$row[name]'>Add </a></td>
</tr>";
$no++;
}
echo "</table>";
} else { }
$conn->close();
?>
<center>
  <button><a href="perfomence.php">back</button>
</center>
 </div>     
</table>
</div>
  </form>
</div>

</body>
</html>