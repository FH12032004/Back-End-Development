<html>
    <head><title>Add Class</title></head>
    <h1>Add Class</h1>
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

        <form method="post" action="AddClass.php">
            <label>ClassID:</label>
                <input type="classid" name="c1"><br>
                <label>Class Number:</label>
                    <input type="ClassNumber" name="c2"><br>
                    <label>Class Room:</label>
                    <input type="ClassRoom" name="c3"><br>
                    <label>Class Capacity:</label>
                    <input type="ClassCapacity" name="c4"><br>
                    <label> Select Student:</label>
                    <select name="Student_id"><br>
</form>
<?php

$link = mysqli_connect("localhost", "root", "", "alphanous");

if ($link === false){
    die("Connection failed:");
}
?>
<?php
                    $sql = mysqli_query($link, "SELECT sID, sName, email, medical_infromation, Grades, pID FROM studnet");
                    while ($row = $sql->fetch_assoc()){
                      echo "<option value='{$row['sID']}'>
                      {$row['sName']}
                      {$row['email']}
                      {$row['medical_infromation']}
                      {$row['Grades']}
                      {$row['pID']}
                      </option>";
                    }
                    ?>
                    </select>
                    <br>
                    <input type="Submit" name="Submit">
                    </form>
                   
<?php

if(isset($_POST['Submit']))
{
    $cid = $_POST['c1'];
    $cnumber = $_POST['c2'];
    $croom = $_POST['c3'];
    $ccapacity = $_POST['c4'];
    $Student_id = $_POST['Student_id'];

    $sql = "INSERT INTO class (cID,ClassNumber,ClassRoom,ClassCapacity,sID) VALUES('$cid','$cnumber','$croom','$ccapacity','$Student_id')";
    if (mysqli_query($link, $sql))
    {
        echo "New Record created sucesfully";
    } else
    {
        echo "Error adding record";
    }
}

?>
</body>
</html>