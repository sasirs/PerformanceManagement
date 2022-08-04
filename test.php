
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="admindash.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<style type="text/css">
  button {
  padding: 12px 34px;
  margin-left: 35%;
  width: 100%;
  color: white;
  border:1px solid rgb(0,255,255);
  background: transparent;
  position: relative;
  cursor: pointer;
  margin-top: 15%;
  font-size: 25px;
}
.sec {
  border:1px solid    #FFFF00;
}

button:hover {
  opacity:1;
  background:   #FF4500;
  border:1px solid  #FF4500;
  color: white;
   box-shadow: 0 0 20px 0px rgba(0,0,0,0.9);
}
.sec {
  position: absolute;
  top: 8%;
  left:30%;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
  overflow: auto;

}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */ /* Enable scroll if needed */
  background-color: transparent;
  padding-top: 1px;
  overflow: none;
}

/* Modal Content/Box */
.modal-content {
  background-color:white;
  margin-left: 30%;
  position: fixed;
  top: 60px;
  bottom: 10px;
  width: 62%;
  min-height: 50vh;
  overflow: auto; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  font-size: 40px;
  font-weight: 400;
  margin-left: 15%;
  color: blue;
  cursor: pointer;
  font-weight: 600;
}

.close:hover{
  color: red;
}


/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.body .fa{
  font-size: 50px;
  padding-left: 30px;
  opacity: 0.7;
}
input{
    width: 100%;
    margin-top: 7px;
    margin-bottom: 30px;
    border: 0;
    outline: none;
    background: none;
    text-decoration: none;
    font-size: 18px;
    cursor: pointer;
    color: black;
    border-bottom: 1px solid green;
}
label{
    width: 100%;
    font-size: 20px;
    color: green;
    margin-bottom: 30px;
    margin-top: 15px;
    text-align: left;
    padding: 0;
    font-weight: bold;
}h2{
  text-align: center;
  padding-left: 10%;
  color: green;
}
.submit button{
  margin-top: 5%;
  padding: 12px 34px;
  margin-left: 30%;
  width: 40%;
  color: white;
  background: blue;
  cursor: pointer;
  font-size: 25px;
  border:none;
}
.submit button:hover{
  opacity:1;
  border:1px solid rgb(255,69,0);
  background: rgb(255,69,0);
  color: white;
   box-shadow: 0 0 20px 0px rgba(0,0,0,0.9);
}
.modal-content1{
  background-color:white;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  margin-left: 20%;
  width: 75%;
 min-height: 80vh;
  overflow: auto; /* Could be more or less, depending on screen size */
}
 
.close1{
  font-weight: 600;
  color: green;
 font-size: 30px;
 padding-left: 95%;
 padding-top: 10%;
  cursor: pointer;
}

.close1:hover{
  color: red;
}
.modal1 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */ /* Enable scroll if needed */
  background-color: transparent;
  padding-top: 1px;
  overflow: auto;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 90%;
  margin-top: 5%;
  margin-bottom: 5%;
  margin-left: 5%;
}
/*table:hover{
  box-shadow: 0 0 20px 0px rgba(0,0,0,0.7);
}*/
th{
  border: 1px solid black;
 background :linear-gradient(rgb(255,255,224),  rgb(124,252,0));
  font-size: 18px;
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
.container1 a{
  color: blue;
  text-decoration: none;
  font-size: 18px;
  font-weight: 600;
  padding-left: 20%;
}
.container1 a:hover{
  color: red;
}
</style>
</head>
<body>
 <div class="sidesec">
    <div class="header">
        <h1>Admin page!!</h1>
        <a href=""><i class="fa fa-sign-out" ></i>logeout</a>
    </div>
     <nav class="sidebar">
            <div class="nav-link">    
                <ul>
                    <li><i class="fa fa-home"><a href="admindash.html" >Home</a></i></li>
                   <li><i class="fa fa-columns" ></i><a href="class1.php" >Class </a></li>
                   <li><i class="fa fa-graduation-cap"></i><a href="students.php" >Students</a></li>
                   <li><i class="fa fa-pencil-square-o" ></i><a href="test.php" >Test</a></li>
                   <li><i class="fa fa-bar-chart-o" ></i><a href="" >Perfomence</a></li>
                    
                </ul>
            </div>
    </nav>
    <div class="body">

      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add Test <i class="fa fa-user-plus"></i></button>
       <button class="sec"onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Manage Test <i class="fa fa-users"></i></button>

<div id="id01" class="modal">
 
  <form class="modal-content" action="insertstudents.php" method="post">
    <div class="container">
      <div class="heading">
     <h2>Please fill in this form to create an account. <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     </h2></div>

    <label ><b> Test Name</b></label>
    <input type="text" placeholder="Enter test name" name="tstname"  required>
    
    <input type="text" name="dept" placeholder="Enter  deprtment" required="">
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