<html>
    <head><title>Update Class</title></head>
    <h1>Update Class</h1>
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
        <a href="Logout.html">Log out</a>
</div>
</div>

    <body>
        <form method="post" action="UpdateClass.php">
            <label>ClassID:</label>
                <input type="classid" name="v1"><br>

                <label>Class Number:</label>
                    <input type="classNumber" name="v2"><br>

                    <label>Class Room:</label>
                    <input type="classroom" name="v3"><br>

                    <label>Class Capacity:</label>
                    <input type="classcapacity" name="v4"><br>


                    <input type="Submit" name="Submit" value="Update"><br>
</form>
<?php

$link = mysqli_connect("localhost", "root", "", "alphanous");

if ($link === false){
    die("Connection failed:");
}
if(isset($_POST['Submit']))
{
    $cid = $_POST['v1'];
    $number = $_POST['v2'];
    $room = $_POST['v3'];
    $capacity = $_POST['v4'];

    $sql ="UPDATE class SET ClassNumber='$number' , ClassRoom='$room' , ClassCapacity='$capacity' WHERE cID=$cid";
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