<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active"> Sign In </h2>
      
  
      <!-- Icon -->
        <div class="fadeIn first">
        <!-- <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> -->
      </div>
  
      <!-- Login Form -->
      <form action="login_student.php" method="post">
        <input type="text" id="usname" class="fadeIn second" name="usname" placeholder="Admission Number">
        <input type="text" id="pass" class="fadeIn third" name="pass" placeholder="password">
        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>
  
      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
      </div>
  
    </div>
  </div>
  <link rel="stylesheet" href="login.css">
  
</body>
</html>
  
<?php
ob_start();

 
   $server = "localhost";
  
   $username = "root";
  
   $password = "";
  
   $con = mysqli_connect($server, $username, $password);
   if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
  }
  else{
    echo"connection successful";
  }
  
  $uname = $_POST['usname'];

  $password = $_POST['pass'];
  
  
  // $phone = $_POST['phone'];
  $sql = "select * from `registration`.`student` where admno='$uname' and password='$password' ";
  $result=mysqli_query($con,$sql);
  $count=mysqli_num_rows($result);
  if($count>0){
    echo "login successful";
    header("Location: studenthome.php?id=$uname");
  

  }
  else{
    echo "login failed";
  }
  
  $con->close();
  
  
   
  ?>

