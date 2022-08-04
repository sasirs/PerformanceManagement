
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="admindash.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" type="text/css" href="studentadmin.css">
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
                   <li  class="active" ><i class="fa fa-graduation-cap"></i><a href="students.php" >Students</a></li>
                   <li><i class="fa fa-bar-chart-o" ></i><a href="perfomence.php" >Perfomence</a></li>
                   <li><i class="fa fa-cogs" ></i><a href="adminpage.php" >Admin settings</a></li>
                    
                </ul>
            </div>
    </nav>
    <div class="body">

      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add students <i class="fa fa-user-plus"></i></button>
       <button class="sec"onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Manage students <i class="fa fa-users"></i></button>

<div id="id01" class="modal">
 
  <form class="modal-content" action="insertstudents.php" method="post">
    <div class="container">
      <div class="heading">
     <h2>Please fill in this form to create an account. <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     </h2></div>

    <label ><b> Name</b></label>
    <input type="text" placeholder="Enter your name" name="name"  required>

    <label ><b>Roll number</b></label>
    <input type="number" name="roll" placeholder="Enter roll number" required="">

    <label ><b>Date of Birth</b></label>
    <input type="date" name="dob" placeholder="Enter  date of Birth" required="">

     <label ><b>Email</b></label>
    <input type="text" name="email" placeholder="Enter  email" required="">

    <label ><b>Mobile number</b></label>
    <input type="number" placeholder="Enter mobile number" name="mobileno"  required="">

    <label ><b>Semester</b></label>
    <input type="number" placeholder="Enter semester" name="sem"  required="">
     <label ><b>Year/Department</b></label>
    <input type="text" name="dept" placeholder="Enter  deprtment ex:3/CSE" required="">
            <div class="submit">
             <button type="submit" class="submit" value="submit">Submit</button>
             </div>
      
    </div>
  </form>
</div>
      
  
<div id="id02" class="modal1">

  <form class="modal-content1" action="displayclass.php" method="post">
    <div class="container1">
      <span onclick="document.getElementById('id02').style.display='none'" class="close1" title="Close Modal">&times;</span>
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
$sql = "SELECT * FROM student";
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
<td><a href='deletestudents.php?rn=$row[roll]'>Delete</td>
</tr>";
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
</body>
</html>