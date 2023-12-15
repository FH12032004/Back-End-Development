<html>
    <head><title>Log In</title></head>
    <h1>teaching assistance Log in</h1>

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

<body>

<?php
                      $link = mysqli_connect("localhost", "root", "", "alphanous");
                      
                      if ($link === false){
                          die("Connection failed:");
                      }
                      ?>
                      <?php
                      if(isset($_POST['U1'])){
                        $username = $_POST['U1'];
                        $password = $_POST['U3'];

                        
                        $query = "SELECT * FROM users WHERE username='$username'
                        AND password='" .md5($password). "'";
                        $result = mysqli_query($link, $query);
                        $row = mysqli_num_rows($result);


                        if($row == 1) {
                            echo "<div class='form'>
                            <h3> Log in is Sucessful</h3><br/>
                            <p class='link'>Click here to <a href='index3.html'>Acess HomePage</a></p>
                            </div>";
                        } else {
                            echo "<div class='form'>
                            <h3> Incorrect Username/password.</h3><br/>
                            <p class='link'>Click here to <a href='Login.php'>Login</a></p>
                            </div>";
                        }
                      } else {
                        ?>
                      

<form name="myForm" method="post" action="Login2.php">
        <label>UserName:</label>
            <input type="username" name="U1"><br>
                <label>Password:</label>
                <input type="password" name="U3"><br>
                <input type="Submit" name="Submit"><br>
                <p class='link'>Click here to <a href='ResgistrationPage.php'>Resgistar</a></p>
                            </div>
                            <?php
                      }
                      ?>
</body>
</html>