
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="admindash.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" type="text/css" href="class.css">
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
                   <li  class="active" ><i class="fa fa-columns" ></i><a href="class1.php" >Class </a></li>
                   <li><i class="fa fa-graduation-cap"></i><a href="students.php" >Students</a></li>
                   <li><i class="fa fa-bar-chart-o" ></i><a href="perfomence.php" >Perfomence</a></li>
                    <li><i class="fa fa-cogs" ></i><a href="adminpage.php" >Admin settings</a></li>
                </ul>
            </div>
    </nav>
    <div class="body">

      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Create class <i class="fa fa-envelope-open"></i></button>
       <button class="sec"onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Manage class <i class="fa fa-pencil-square-o"></i></button>

<div id="id01" class="modal">
 
  <form class="modal-content" action="addclass.php" method="post">
    <div class="container">
      <h2>Please fill in this form to create a class. <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span></h2>
           <p>Class ID:</p>
            <input type="number" name="classid" placeholder="Enter class id number" required="">
            <p>Year/Department:</p>
            <input type="text" name="dept" placeholder="Enter Class name ex:3/CSE" required="">
            <p>Section:</p>
            <input type="text" name="section" placeholder="Enter section name" required="">
            <p>Incharge Name:</p>
            <input type="text" name="incharge" placeholder="Enter incharge name" required="">
            <p>subject 1:</p>
            <input type="text" name="sub1" placeholder="Enter subject 1 name" required="">
            <p>subject 2:</p>
            <input type="text" name="sub2" placeholder="Enter subject 2 name" required="">
            <p>subject 3:</p>
            <input type="text" name="sub3" placeholder="Enter subject 3 name" required="">
            <p>subject 4:</p>
            <input type="text" name="sub4" placeholder="Enter subject 4 name" required="">
            <p>subject 5:</p>
            <input type="text" name="sub5" placeholder="Enter subject 5 name" required="">
            <p>subject 6:</p>
            <input type="text" name="sub6" placeholder="Enter subject 6 name" >
            <div class="submit">
             <button type="submit" class="submit" value="Register">Register</button>
             </div>
            <a onclick="document.getElementById('id01').style.display='none'" ><b>back to home!</b></a>
    </div>
  </form>
</div>

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
<th>Delete</th>
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
<td>".strtolower($row["incharge"]) .  "</td>
<td><a href='deleteclass.php?rn=$row[dept]'>Delete </a></td>
<td><a href='view.php?rn=$row[dept]'>View </a></td>
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
