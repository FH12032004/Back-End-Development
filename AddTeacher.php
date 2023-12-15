<html>
    <head><title>Add Teacher</title>
    <script>
      function validateForm()
    {
        let a = document.forms["myForm"]["T1"].value;
        let b = document.forms["myForm"]["T2"].value;
        let c = document.forms["myForm"]["T3"].value;
        let d = document.forms["myForm"]["T4"].value;

        if (a=="")
        {
          alert("ID needs to be fill in");
          return false;
        }

        if (b=="")
        {
          alert("Name needs to be fill in");
          return false;
        }

        if (c=="")
        {
          alert("Email needs to be fill in");
          return false;
        }

        if (d=="")
        {
          alert("Phone Number needs to be fill in");
          return false;
        }
    }
    </script>
  </head>
    <h1>Add Teacher</h1>
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

        <form name="myForm" method="post" action="AddTeacher.php"onsubmit="return validateForm()">
            <label>TeacherID:</label>
                <input type="Teacherid" name="T1"><br>
                <label>Teacher Name:</label>
                    <input type="TeacherName" name="T2"><br>
                    <label>Teacher Address:</label>
                    <input type="TeacherAddress" name="T3"><br>
                    <label>Teacher Email:</label>
                    <input type="TeacherEmail" name="T4"><br>
                    <label>Teacher Annual Salary:</label>
                    <input type="TeacherSalary" name="T5"><br>
                    <label>Teacher Phone Number:</label>
                    <input type="TeacherPhoneNumber" name="T6"><br>
                    <label>Teacher Background:</label>
                    <input type="TeacherBackgroundCheck" name="T7"><br>
                    <label>Select Class:</label>
                     <select name="class_id">

                    <?php
                    $link = mysqli_connect("localhost", "root", "","alphanous");

                    if ($link === false){
                        die("Connection failed:");
                    }
                    ?>


<?php
                    $sql = mysqli_query($link, "SELECT cID, ClassNumber, ClassRoom, ClassCapacity, sID FROM class");
                    while ($row = $sql->fetch_assoc()){
                      echo "<option value='{$row['cID']}'>
                      {$row['ClassNumber']}
                      {$row['ClassRoom']}
                      {$row['ClassCapacity']}
                      {$row['sID']}
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
    $tid = $_POST['T1'];
    $tname = $_POST['T2'];
    $address = $_POST['T3'];
    $email = $_POST['T4'];
    $salary = $_POST['T5'];
    $phonenumber = $_POST ['T6'];
    $background = $_POST['T7'];
    $class_id = $_POST['class_id'];

    $sql = "INSERT INTO teacher (tID,tName,Address,email,AnnualSalary,PhoneNumber,BackgroundCheck,cID) VALUES('$tid','$tname','$address','$email','$salary','$phonenumber','$background','$class_id')";
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