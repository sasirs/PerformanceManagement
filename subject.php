
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="admindash.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" type="text/css" href="subject.css">

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
                   <li><i class="fa fa-book" ></i><a href="" >Subjects</a></li>
                   <li><i class="fa fa-pencil-square-o" ></i><a href="" >Test</a></li>
                   <li><i class="fa fa-bar-chart-o" ></i><a href="" >Perfomence</a></li>
                    
                </ul>
            </div>
    </nav>
    <div class="body">

      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add subjects <i class="fa fa-envelope-open"></i></button>
       <button class="sec"onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Manage subjects <i class="fa fa-pencil-square-o"></i></button>

<div id="id01" class="modal">
 
  <form class="modal-content" id="modal-content" action="insertstudents.php" method="post">
    <div class="container">
      <div class="heading">
     <h2>Please fill in this form to create Subject. <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     </h2></div>
     <div class="inputfields">
      <table class="tableinputs" id="tableinputs">
     <tr>
     <th>Class id</th>
     <th>Subject Name</th>
     <th>Subject Id</th>
     <th>Subject Incharge</th>
     <th>Add or Remove</th>
     </tr>
     <tr>
       <td><input type="number" name="classid[]" placeholder="Enter class id" required=""></td>
       <td><input type="text" name="subname" placeholder="Enter class name" required=""></td>
       <td><input type="number" name="subid" placeholder="Enter subject id" required=""></td>
       <td><input type="text" name="subincharge"  placeholder="Enter Incharge name" required=""></td>
       <td><input type="button" name="add" id="add"  value="add"></td>
     </tr>
     </table>
     <center >
       <input  class="save" type="submit" name="save" id="save" value="save">
     </center>
    </div>
  </form>
</div>
      
  
<div id="id02" class="modal1">
  <span onclick="document.getElementById('id02').style.display='none'" class="close1" title="Close Modal">&times;</span>

  <form class="modal-content1" action="displayclass.php" method="post">
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
$(document).ready(function(){
  var i =1;
  $('$add').click(function(){
    i++;
    $('tableinputs').append('<tr id="row'+i+'"><td><input type="number" name="classid[]" placeholder="Enter class id" required=""></td> <td><input type="text" name="subname" placeholder="Enter class name" required=""></td> <td><input type="number" name="subid" placeholder="Enter subject id" required=""></td><td><input type="text" name="subincharge"  placeholder="Enter Incharge name" required=""></td><td><input type="button" name="remove" id="'+i+'"  value="remove"></td> </tr>');
  });
  $(document).on('click','.remove',function(){
    var button_id = $(this).attr("id");
    $("#row"+button_id+"").remove();
  });
});
</script>
</body>
</html>