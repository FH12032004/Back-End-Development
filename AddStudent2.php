<html>
    <head><title>Add Student</title>
  
    <script>
      function validateForm()
    {
        let x = document.forms["myForm"]["v1"].value;
        let y = document.forms["myForm"]["v2"].value;
        let z = document.forms["myForm"]["v3"].value;

        if (x=="")
        {
          alert("ID needs to be fill in");
          return false;
        }else if (x.length > 20) {
        alert("ID must be 20 digits or less");
        return false;
        }

        if (y=="")
        {
          alert("Name needs to be fill in");
          return false;
        }else if (y.length > 5) {
        alert("Name needs to be up to 5 characters long");
        return false;
    }

        if (z=="")
        {
          alert("email needs to be fill in");
          return false;
        }else if (!validateEmail(z)) {
                return false;
            }

            return true;
        }

        function validateEmail(z) {
            let emailRegex = /\S+@\S+\.\S+/;

            if (!emailRegex.test(z)) {
                alert("Please enter the email Adress with the @ symbol.");
                return false;
            }

            return true;
      }
      </script>
  
  
  </head>
    <h1>Add Student</h1>

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

  form {  font-family: Arial, sans-serif;
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
        <form name="myForm" method="post" action="AddStudent.php" onsubmit="return validateForm()">
            <label>StudentID:</label>
                <input type="studentid" name="v1"><br>
                <label>Student Name:</label>
                    <input type="StudnetName" name="v2"><br>
                    <label>Student Email:</label>
                    <input type="StudentEmail" name="v3" id="email"><br>
                    <label>Student Mdecial Information:</label>
                    <input type="StudentMedicalInformation" name="v4" id="medical"><br>
                    <label>Student Grades:</label>
                    <input type="StudentGrades" name="v5" id="grades"><br>
                    <label> Select Parent:</label>
                    <select name="parent_id">

                      <?php
                      $link = mysqli_connect("localhost", "root", "", "alphanous");
                      
                      if ($link === false){
                          die("Connection failed:");
                      }
                      ?>

                    <?php
                    $sql = mysqli_query($link, "SELECT pID, pName, email, PhoneNumber FROM parent");
                    while ($row = $sql->fetch_assoc()){
                      echo "<option value='{$row['pID']}'>
                      {$row['pName']}
                      {$row['email']}
                      {$row['PhoneNumber']}
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
    $sid = $_POST['v1'];
    $sname = $_POST['v2'];
    $email = $_POST['v3'];
    $medical = $_POST['v4'];
    $grade = $_POST['v5'];
    $parent_id = $_POST['parent_id'];

    $sql = "INSERT INTO studnet (sID,sName,email,medical_infromation,Grades,pID) VALUES('$sid','$sname','$email','$medical','$grade','$parent_id')";
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