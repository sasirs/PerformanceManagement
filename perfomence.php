
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="admindash.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" type="text/css" href="perfomence.css">
</head>
<body>
 <div class="sidesec">
    <div class="header">
        <h1>Admin page!!</h1>
        <a href="logout.php"><i class="fa fa-sign-out" ></i>logeout</a>
    </div>
     <nav class="sidebar">
            <div class="nav-link">    
                <ul>
                   <li><i class="fa fa-home"><a href="admindash.php" >Home</a></i></li>
                   <li><i class="fa fa-columns" ></i><a href="class1.php" >Class </a></li>
                   <li><i class="fa fa-graduation-cap"></i><a href="students.php" >Students</a></li>
                   <li  class="active" ><i class="fa fa-bar-chart-o" ></i><a href="perfomence.php" >Perfomence</a></li>
                    <li><i class="fa fa-cogs" ></i><a href="adminpage.php" >Admin settings</a></li>
                </ul>
            </div>
    </nav>
    <div class="body">

      <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Add perfomencs <i class="fa fa-envelope-open"></i></button>
       <button class="sec"onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Manage perfomencs <i class="fa fa-pencil-square-o"></i></button>

<div id="id02" class="modal1">
  <form class="modal-content1" action="" method="post">
    <div class="container1">
       <span onclick="document.getElementById('id02').style.display='none'" class="close1" title="Close Modal">&times;</span>
<table>
<div class="table"> 
<tr>
<th>S.no</th>
<th>Class id</th>
<th>Department name</th>
<th>Section</th>
<th>Incharge</th>
<th>View</th>
</tr>
</div>
<div class="phpclass">
<?php
$conn = mysqli_connect("localhost", "root", "", "perform");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM class";
$result = $conn->query($sql);
$no=1;
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
<td>" . $no. "</td>
<td>" . $row["classid"] . "</td>
<td>". strtolower($row["dept"]). "</td>
<td>". strtoupper($row["section"])."</td>
<td>". strtolower($row["incharge"]) .  "</td>
<td><a href='view1.php?rn=$row[dept]'>View </a></td>
</tr>" ;
$no++;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
 </div>     
</table>
</div>
  </form>
</div>


<div id="id01" class="modal">
  <form class="modal-content" action="" method="post">
    <div class="container1">
       <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
<table>
<div class="table"> 
<tr>
<th>S.no</th>
<th>roll</th>
<th>name</th>
<th>sub1</th>
<th>sub2</th>
<th>sub3</th>
<th>sub4</th>
<th>sub5</th>
<th>sub6</th>
<th>workday</th>
<th>preday</th>
<th>percentage</th>
<th>feedback</th>
<th>Delete</th>
</tr>
</div>
<div class="phpclass">
<?php
$conn = mysqli_connect("localhost", "root", "", "perform");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM perfomence";
$result = $conn->query($sql);
$no=1;
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
<td>" . $no. "</td>
<td>" . $row["roll"] . "</td>
<td>". $row["name"]. "</td>
<td>". $row["sub1"]."</td>
<td>". $row["sub2"] .  "</td>
<td>". $row["sub3"] .  "</td>
<td>". $row["sub4"] .  "</td>
<td>". $row["sub5"] .  "</td>
<td>". $row["sub6"] .  "</td>
<td>". $row["workday"] .  "</td>
<td>". $row["preday"] .  "</td>
<td>". $row["percentage"] .  "</td>
<td>". $row["feedback"] .  "</td>
<td><a href='deleteperfomence.php?rn=$row[roll]'>Delete </a></td>
</tr>" ;
$no++;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
 </div>     
</table>
</div>
  </form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>
