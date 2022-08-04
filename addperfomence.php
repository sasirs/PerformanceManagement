<?php
$conn = mysqli_connect("localhost", "root", "", "perform");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$dept=$_GET['dept'];
$result = mysqli_query($conn,"SELECT * FROM class where dept='$dept'");
if($row = $result->fetch_assoc())
?>
<?php
$roll=$_GET['rn'];
$name=$_GET['rn'];
$result1 = mysqli_query($conn,"SELECT * FROM student WHERE roll='$roll'");
$row1= mysqli_fetch_array($result1);
?>
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
  border:1px solid green;
  background: green;
  color: white;
   box-shadow: 0 0 20px 0px rgba(0,0,0,0.9);
}
.sec {
  position: absolute;
  top: 8%;
  left:30%;
}


/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 10px;
  overflow: none;

}

.modal-content{
   background-color: white;
  margin-left: 20%;
  position: fixed;
  top: 10px;
  bottom: 10px;
  width: 100%;
  overflow-x: hidden;
  overflow-y:auto; /* Could be more or less, depending on screen size */
}
/* The Close Button (x) */
.close {
  position: absolute;
  top: 10px;
  left: 90%;
  font-size: 40px;
  font-weight: red;
  color: blue;
  cursor: pointer;
  font-weight: 600;
}

.close:hover{
  color: red;
}

input{
    width: 58%;
    margin-top: 20px;
    margin-bottom: 20px;
    outline: none;
    background: none;
    text-decoration: none;
    font-size: 18px;
    cursor: pointer;
    color: black;
    padding: 10px; 
    border: 1px solid green;
}

select{
    width: 60%;
    margin-top: 20px;
    outline: none;
    background: none;
    text-decoration: none;
    font-size: 18px;
    cursor: pointer;
    color: black;
    padding: 10px; 
    border: 1px solid green;
}
label{
    width: 100%;
    font-size: 20px;
    color: green;
    margin-bottom: 50px;
     margin-top: 50px;
    text-align: left;
    font-weight: bold;
}
p{
    width: 100%;
    font-size: 20px;
    color: green;
    margin-bottom: 30px;
    margin-top: 15px;
    text-align: left;
    padding: 0;
    font-weight: bold;
}h2{
  padding-left: 15%;
  color: rgb(255,69,0);
  font-size: 25px;
}
.container a
{
    width: 100%;
    text-decoration: none;
    font-size: 22px;
    font-weight: bold;
    color:green;
    margin-left:25%;
    position: absolute;
    cursor: pointer;

}
.container a:hover{
    color:red; 
    transition: 0.5s;
}
.submit button{
  padding: 12px 34px;
  margin-left: 5%;
  transform: translate(10%,-200%);
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
h3{
  padding-left: 25%;
  margin-top: 3%;
  font-size: 25px;
  margin-bottom: 1%;
}
#subject{
  border: none;
  font-size: 20px;
}
</style>
</head>
<body>

<div id="id01" class="modal">
 
  <form class="modal-content" action="insertperfomence.php" method="post">
    <div class="container">
      <h2>Student Perfomence Management <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span></h2> 
             <h3>Student</h3>
             <label>Roll Number:</label></br>
             <input type="number" name="roll"  value="<?php echo $row1['roll']; ?>"><br>
             <label>Name:</label></br>
             <input type="text" name="name"  value="<?php echo $row1['name']; ?>"><br>

            <h3>Marks</h3>
            <label>subject 1:</label>
            <input type="text" id="subject" name="sn1"  value="<?php echo $row['sub1']; ?>">
            <select name="sub1" id="sub1">
             <option value="A+">A+</option>
             <option value="A">A</option>
             <option value="B+">B+</option>
             <option value="B">B</option>
             <option value="C">C</option>
             <option value="U">U</option>
           </select></br></br>

           <label>subject 2:</label>
            <input type="text" id="subject" name="sn2"  value="<?php echo $row['sub2']; ?>">
 
            <select name="sub2" id="sub2">
             <option value="A+">A+</option>
             <option value="A">A</option>
             <option value="B+">B+</option>
             <option value="B">B</option>
             <option value="C">C</option>
             <option value="U">U</option>
              <option value="none">none</option>
             </select></br></br>

             <label>subject 3:</label>
            <input type="text" id="subject" name="sn3"  value="<?php echo $row['sub3']; ?>">

            <select name="sub3" id="sub3">
             <option value="A+">A+</option>
             <option value="A">A</option>
             <option value="B+">B+</option>
             <option value="B">B</option>
             <option value="C">C</option>
             <option value="U">U</option>
             </select></br></br>

             <label>subject 4:</label>
            <input type="text" id="subject" name="sn4"  value="<?php echo $row['sub4']; ?>">

            <select name="sub4" id="sub4">
             <option value="A+">A+</option>
             <option value="A">A</option>
             <option value="B+">B+</option>
             <option value="B">B</option>
             <option value="C">C</option>
             <option value="U">U</option>
             </select></br></br>

             <label>subject 5:</label>
            <input type="text" id="subject" name="sn5"  value="<?php echo $row['sub5']; ?>">
            
            <select name="sub5" id="sub5">
             <option value="A+">A+</option>
             <option value="A">A</option>
             <option value="B+">B+</option>
             <option value="B">B</option>
             <option value="C">C</option>
             <option value="U">U</option>
             </select></br></br>

             <label>subject 6:</label>
            <input type="text" id="subject" name="sn6"  value="<?php echo $row['sub6']; ?>">

            <select name="sub6" id="sub6">
             <option value="A+">A+</option>
             <option value="A">A</option>
             <option value="B+">B+</option>
             <option value="B">B</option>
             <option value="C">C</option>
             <option value="U">U</option>
              <option value="none">none</option>
             </select></br></br>

             <h3>Attendence</h3>
             <label>Total No.of Working Days</label></br>
             <input type="number" name="workday" required="" placeholder="Enter Working days"></br>
             <label>Total No.of Precent Days</label></br>
             <input type="number" name="preday" required="" placeholder="Enter Precent days"><br>
             <label>Total Percentage</label></br>
             <input type="text" name="percentage" required="" placeholder="Enter percentage">

             <h3>Feedback</h3>
             <label for="feedback">Overall Feedback</label><br>
             <select name="feedback" id="feedback">
             <option value="VeryGood">VeryGood</option>
             <option value="Good">Good</option>
             <option value="Better">Better</option>
             <option value="Poor">Poor</option>
             <option value="Worst">Worst</option>
             </select></br></br>

            <div class="submit">
             <button type="submit" class="submit" value="Register">Register</button>
             </div>
            <a onclick="document.getElementById('id01').style.display='none'" ><b>back to home!</b></a>
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
