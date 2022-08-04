<?php
$conn = mysqli_connect("localhost", "root", "", "perform");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
session_start();
$ad=$_SESSION['ad'];

$result = mysqli_query($conn,"SELECT * FROM admin WHERE adminID='$ad'");
$row= mysqli_fetch_array($result);

if(count($_POST)>0) {

if(($_POST['opswd'] == $row['apswd'])){
      //check if new password match retype
      if(($_POST['npswd'] == $_POST['cpswd'])){

      mysqli_query($conn,"UPDATE admin set apswd='" . $_POST['npswd'] . "'  WHERE  adminID='$ad'");

      echo "<script>alert('Update Sucessfully');</script>";
      }
      else
      {
      echo "<script>alert('Your new and Retype Password is not match')</script>";
      }
    }
 else
    {
    echo "<script>alert('Your old password is wrong')</script>";
    } 
}
?>

<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="admindash.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" type="text/css" href="adminpage.css">
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
                   <li><i class="fa fa-bar-chart-o" ></i><a href="perfomence.php" >Perfomence</a></li>
                    <li class="active"><i class="fa fa-cogs" ></i><a href="adminpage.php" >Admin settings</a></li>
                </ul>
            </div>
    </nav>
    <div class="body">

      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Change Password <i class="fa fa-envelope-open"></i></button>
       <button class="sec"onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Manage Admins <i class="fa fa-pencil-square-o"></i></button>


<div id="id01" class="modal">
 
  <form class="modal-content" action="" method="POST">
    <div class="container">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
           <p>Old Password</p>
            <input type="text" name="opswd"  placeholder="Enter old Password" required="" >
            <p>New Password</p>
            <input type="text" name="npswd" placeholder="Enter New Password" required="">
            <p>Confirm Password:</p>
            <input type="text" name="cpswd" placeholder="Enter Confirm Password " required="">
             <div class="submit">
            <button type="submit" class="submit" value="update">Update</button>
             </div>
          
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
<th>Admin Name</th>
<th>Admin Id</th>
<th>Email</th>
<th>Mobile No</th>
<th>Department</th>
<th>Operation</th>
</div>
<div class="phpclass">
<?php
$conn = mysqli_connect("localhost", "root", "", "perform");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM admin";
$result = $conn->query($sql);
$no=1;
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
<td>" . $no. "</td>
<td>" . $row["name"]. "</td>
<td>" . $row["adminID"] . "</td>
<td>". $row["email"]. "</td>
<td>". $row["mobileno"]."</td>
<td>". $row["dept"] .  "</td>
<td><a href='deleteadmin.php?rn=$row[adminID]'>Delete</td>
</tr>";
$no++;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
<center class="back">
<a  onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Add admin </a>
</center>
 </div>     
</table>
</div>
</form>
</div>


<div id="id03" class="modal3">
 
  <form class="modal-content3" action="insertadmin.php" method="POST">
    <div class="container3">
     <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
           <p>Admin Name</p>
            <input type="text" name="name"  placeholder="Enter Admin name" required="" >
            <p>Admin Id</p>
            <input type="number" name="adminID" placeholder="Enter Admin id" required="">
            <p>Create Password</p>
            <input type="password" name="apswd" placeholder="Enter  Password " required="">
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter  Email " required="">
            <p>Mobile Number</p>
            <input type="no" name="mobileno" placeholder="Enter  Mobile number " required="">
             <p>Deprtment</p>
            <input type="text" name="dept" placeholder="Enter  Deprtment " required="">
             <div class="submit1">
            <button type="submit" class="submit" value="submit">Submit</button>
             </div>
          
    </div>
  </form>
</div>
</div>
</body>
</html>