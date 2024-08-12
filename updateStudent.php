<?php

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);
if(!$con){
 die("connection to this database failed due to" . mysqli_connect_error());
}
else{
}


$studentId = $_GET['id'];
$sql="select * from `registration`.`student` where admno='$studentId'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$admno = $row['admno'];
$password = $row['password'];
$name = $row['name'];
$email = $row['email'];
$phone = $row['phone'];
$address = $row['address'];
$year = $row['enrollYear'];
$gname = $row['gname'];
$gphone = $row['gphone'];
$bgroup = $row['bgroup'];
$dob = $row['dob'];
$semester = $row['semester'];
$department = $row['department'];

?>

<?php
    

    if(isset($_POST['btn'])){
       
       $password = $_POST['psw'];
       $name = $_POST['name'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $address = $_POST['address'];
       $year = $_POST['year'];
       $gname = $_POST['gname'];
       $gphone = $_POST['gphone'];
       $bgroup = $_POST['bgroup'];
       $dob = $_POST['dob'];
       $semester = $_POST['semester'];
       $department = $_POST['department'];
       
       
       $sql = "Update `registration`.`student` set `name`='$name', password='$password', 
       email='$email' , phone='$phone' ,address='$address' ,enrollYear='$year' ,gname='$gname' ,
       gphone='$gphone' ,bgroup='$bgroup' ,dob='$dob' 
       Where admno='$studentId'  ";
       $result=mysqli_query($con,$sql);

       if($result) {
        //echo "Data Updated Succesfully";
        header("Location: studenthome.php?id=$studentId");
       }
       else{
         echo "error occured: $sql <br> $con->error";
       }
       $con->close();
       
       }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Simple Registration Form</title>
</head>
<body>
    <div class="wrapper fadeInDown">
        <form action="updateStudent.php?id=<?php echo $studentId; ?>" method="post" name="form1">

            <div class="container">
                <h1>Edit Details</h1>
                <p>Admission Number: <?php echo $admno; ?></p>
                <p>Semester: <?php echo $semester; ?></p>
                <p>Department: <?php echo $studentId; ?></p>
    
                <label for="psw"><b>Password</b></label>
                <input type="text" name="psw" id="psw"  placeholder="Enter Password" value=<?php echo $password; ?> required>
    
                <label for="name"><b>Full Name</b></label>
                <input type="text" name="name" id="name" placeholder="Enter Name" value=<?php echo $name; ?> required>

                <label for="email"><b>Email</b></label>
                <input type="email" name="email" id="email" placeholder="Enter Email" value=<?php echo $email; ?> required>
    
               <label for="phone"><b>Phone Number</b></label>
               <input type="tel"name="phone" id="phone"  placeholder="Enter Phone Number" value=<?php echo $phone; ?>  pattern="[0-9]{10}" required>
    
               <label for="address"><b>Address</b></label>
               <input type="text" name="address" id="address" placeholder="Enter Address" value=<?php echo $address; ?> required>
    
               <label for="year"><b>Enrollment Year</b></label>
               <input type="tel" name="year" id="year" placeholder="Enter Enrollment Year" pattern="[0-9]{4}" value=<?php echo $year; ?> required>
    
              <label for="dob"><b>Date of Birth</b></label>
              <input type="date" name="dob" id="dob" value=<?php echo $dob; ?> required>
    
              <label for="gname"><b>Guardian Name</b></label>
              <input type="text" name="gname" id="gname" placeholder="Enter Guardian Name" value=<?php echo $gname; ?> required>
    
              <label for="gphone"><b>Guardian Phone Number</b></label>
              <input type="tel"name="gphone" id="gphone"  placeholder="Enter Guardian Phone Number" value=<?php echo $gphone; ?>  pattern="[0-9]{10}" required>
    
              <label for="bgroup"><b>Blood Group</b></label>
              <input type="text" name="bgroup" id="bgroup" placeholder="Enter Blood Group" value=<?php echo $bgroup; ?> required>
              
          
              <div class="clearfix">
          
              <button type="submit" name="btn" class="btn">Update</button>
              
                
              </div>
              
            </div>
          </form>
    </div>

</body>
</html>