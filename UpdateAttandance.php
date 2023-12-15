<html>
    <head><title>Update Attandance</title></head>
    <h1>Update Attandnace</h1>
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

  h2{
    color: yellow;
  }

  body {
  background-color: yellowgreen;
}

  form { font-family: Arial, sans-serif;
            padding: 10px; }
           input, textarea { margin-top: 10px;
            display: block; }
           #mySubmit { margin-left: 110px; }
           footer{
            color: white;
            text-align: bottom;
          }
        </style>
 <div class="navbar">
          <a href="index1.html">Home</a>
        <div class="dropdown">
            <button class="dropbtn">View 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="ViewStudent.php">Student</a>
              <a href="ViewTeacher.php">Teacher</a>
              <a href="ViewParent.php">Parent/Guardians</a>
              <a href="ViewClass.php">Classes</a>
              <a href="ViewTeacherAssisstance.php">Teacher Assisstance</a>
              <a href="ViewAttendance.php">Attendance</a>
          </div> 
        </div>
        <div class="dropdown">
            <button class="dropbtn">Add
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="AddStudent.php">Student</a>
              <a href="AddTeacher.php">Teacher</a>
              <a href="AddParent.php">Parent/Guardains</a>
              <a href="AddClass.php">Classes</a>
              <a href="AddTeacherAssistance.php">Teacher Assisstance</a>
              <a href="AddAttendance.php">Attendance</a>
          </div> 
        </div>
        <div class="dropdown">
            <button class="dropbtn">Delete
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="DeleteStudent.php">Student</a>
              <a href="DeleteTeacher.php">Teacher</a>
              <a href="DeleteParent.php">Parents/Guardians</a>
              <a href="DeleteClass.php">Classes</a>
              <a href="DeleteTeacherAssistance.php">Teacher Assisstance</a>
              <a href="DeleteAttandance.php">Attendance</a>
          </div> 
        </div>
        <div class="dropdown">
            <button class="dropbtn">Update
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="UpdateStudent.php">Studnet</a>
              <a href="UpdateTeacher.php">Teacher</a>
              <a href="UpdateParent.php">Parents/Guardians</a>
              <a href="UpdateClass.php">Classes</a>
              <a href="UpdateTeacherAssistance.php">Teacher Assisstance</a>
              <a href="UpdateAttandance.php">Attendance</a>
          </div> 
        </div>
      <a href="Logout.html">Log Out</a>
</div>
</div>

    <body>
        <form method="post" action="UpdateAttandance.php">
                        <label> Attendance ID:</label>
                <input type="attendanceid" name="ID"><br>

                <label>DateTime:</label>
                    <input type="Date" name="datetime"><br>

                    <input type="Submit" name="Submit" value="Update"><br>
</form>
<?php

$link = mysqli_connect("localhost", "root", "", "alphanous");

if ($link === false){
    die("Connection failed:");
}
if(isset($_POST['Submit']))
{
    $aid = $_POST['ID'];
    $date = $_POST['datetime'];

    $sql ="UPDATE attendance SET DateTime='$date' WHERE aID=$aid";
    if ($link->query($sql) === TRUE){
        echo "Record update sucessfully";
    } else {
        echo "Error updating record:" . $link->error;
    }
    $link->close();
}
?>
</body>
</html>