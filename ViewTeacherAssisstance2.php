<html>
    <head><title>View Teacher Assistance</title></head>
    <h1>View Teacher Assistance</h1>
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
<div class="navbar">
          <a href="index2.html">Home</a>
        <div class="dropdown">
            <button class="dropbtn">View 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="ViewStudent2.php">Student</a>
              <a href="ViewParent2.php">Parent/Guardians</a>
              <a href="ViewClass2.php">Classes</a>
              <a href="ViewTeacherAssisstance2.php">Teacher Assisstance</a>
              <a href="ViewAttendance2.php">Attendance</a>
          </div> 
        </div>
        <div class="dropdown">
            <button class="dropbtn">Add
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="AddStudent2.php">Student</a>
              <a href="AddParent2.php">Parent/Guardains</a>
              <a href="AddClass2.php">Classes</a>
              <a href="AddTeacherAssistance2.php">Teacher Assisstance</a>
              <a href="AddAttendance2.php">Attendance</a>
          </div> 
        </div>
        <div class="dropdown">
            <button class="dropbtn">Delete
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="DeleteStudent2.php">Student</a>
              <a href="DeleteParent2.php">Parents/Guardians</a>
              <a href="DeleteClass2.php">Classes</a>
              <a href="DeleteTeacherAssistance2.php">Teacher Assisstance</a>
              <a href="DeleteAttandance2.php">Attendance</a>
          </div> 
        </div>
        <div class="dropdown">
            <button class="dropbtn">Update
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="UpdateStudent2.php">Studnet</a>
              <a href="UpdateParent2.php">Parents/Guardians</a>
              <a href="UpdateClass2.php">Classes</a>
              <a href="UpdateTeacherAssistance2.php">Teacher Assisstance</a>
              <a href="UpdateAttandance2.php">Attendance</a>
          </div> 
        </div>
        <a href="logout.html">Log out</a>
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
    <th width="150px">Teacher Assistance ID<br><hr></th>
    <th width="250px">Name<br><hr></th>
    <th width="250px">Address</Address><br><hr></th>
    <th width="250px">Email<br><hr></th>
    <th width="250px">PhoneNumber<br><hr></th>
    <th width="250px">Anual Salary<br><hr></th>
    <th width="250px">Background Check<br><hr></th>
    <th width="250px">Teacher ID<br><hr></th>
</tr>

<?php
$sql = mysqli_query($link, "SELECT taID, taName, Address, Email, Telephone, AnualSalary, BackgroundCheck, tID FROM teachingassistance");
while ($row = $sql->fetch_assoc())
{
    echo "
    <tr>
    <th>{$row['taID']}</th>
    <th>{$row['taName']}</th>
    <th>{$row['Address']}</th>
    <th>{$row['Email']}</th>
    <th>{$row['Telephone']}</th>
    <th>{$row['AnualSalary']}</th>
    <th>{$row['BackgroundCheck']}</th>
    <th>{$row['tID']}</th>
    </tr> ";
}

?>

</table>
</body>
</html>
</table>
</body>
</html>