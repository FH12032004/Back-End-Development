<html>
    <head><title>View Teacher</title></head>
    <h1>View Teacher</h1>
    <body>
    <style>
.navbar {
    overflow: hidden;
    background-color: green
  }
  
  .navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  .dropdown {
    float: left;
    overflow: hidden;
  }
  
  .dropdown .dropbtn {
    font-size: 16px;  
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
  }
  
  .navbar a:hover, .dropdown:hover .dropbtn {
    background-color: yellowgreen
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color:  yellowgreen;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .dropdown-content a {
    float: none;
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }
  
  .dropdown-content a:hover {
    background-color: #ddd;
  }
  
  .dropdown:hover .dropdown-content {
    display: block;
  }

  h1 {
    text-align: center;
    color: yellow;
  }

  body {
  background-color: yellowgreen;
}
        </style>
<div class="navbar">
          <a href="index3.html">Home</a>
        <div class="dropdown">
            <button class="dropbtn">View 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="ViewStudent3.php">Student</a>
              <a href="ViewTeacher3.php">Teacher</a>
              <a href="ViewParent3.php">Parent/Guardians</a>
              <a href="ViewClass3.php">Classes</a>
              <a href="ViewAttendance3.php">Attendance</a>
          </div> 
        </div>
        <div class="dropdown">
            <button class="dropbtn">Add
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="AddStudent3.php">Student</a>
              <a href="AddTeacher3.php">Teacher</a>
              <a href="AddParent3.php">Parent/Guardains</a>
              <a href="AddClass3.php">Classes</a>
              <a href="AddAttendance3.php">Attendance</a>
          </div> 
        </div>
        <div class="dropdown">
            <button class="dropbtn">Delete
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="DeleteStudent3.php">Student</a>
              <a href="DeleteTeacher3.php">Teacher</a>
              <a href="DeleteParent3.php">Parents/Guardians</a>
              <a href="DeleteClass3.php">Classes</a>
              <a href="DeleteAttandance3.php">Attendance</a>
          </div> 
        </div>
        <div class="dropdown">
            <button class="dropbtn">Update
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="UpdateStudent3.php">Studnet</a>
              <a href="UpdateTeacher3.php">Teacher</a>
              <a href="UpdateParent3.php">Parents/Guardians</a>
              <a href="UpdateClass3.php">Classes</a>
              <a href="UpdateAttandance3.php">Attendance</a>
          </div> 
        </div>
      <a href="logout.html">Log Out</a>
</div>
</div>
    <?php

$link = mysqli_connect("localhost", "root", "","alphanous");

if ($link === false){
    die("Connection failed:");
}
?>

<h3>See all Teachers</h3>

<table>

<tr>
    <th width="150px">Teacher ID<br><hr></th>
    <th width="250px">Name<br><hr></th>
    <th width="250px">Address<br><hr></th>
    <th width="250px">email<br><hr></th>
    <th width="250px">Salary<br><hr></th>
    <th width="250px">PhoneNumber<br><hr></th>
    <th width="250px">Background<br><hr></th>
    <th width="250px">Class ID<br><hr></th>
</tr>

<?php
$sql = mysqli_query($link, "SELECT tID, tName, Address, email, AnnualSalary, PhoneNumber, BackgroundCheck, cID FROM teacher");
while ($row = $sql->fetch_assoc())
{
    echo "
    <tr>
    <th>{$row['tID']}</th>
    <th>{$row['tName']}</th>
    <th>{$row['Address']}</th>
    <th>{$row['email']}</th>
    <th>{$row['AnnualSalary']}</th>
    <th>{$row['PhoneNumber']}</th>
    <th>{$row['BackgroundCheck']}</th>
    <th>{$row['cID']}</th>
    </tr> ";
}

?>

</table>
</body>
</html>