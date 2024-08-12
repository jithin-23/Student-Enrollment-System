<?php

if(isset($_POST['btn'])){
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


$admno = $_POST['admno'];
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


$sql="select * from `registration`.`student` where admno = '$admno' ";
$result = mysqli_query($con, $sql);
$count_user = mysqli_num_rows($result);


if($count_user==0) {
    $sql = "INSERT INTO `registration`.`student` ( `name`, `admno`, `password`,`email`,`phone`,`address`,`enrollYear`,`gname`,`gphone`,`bgroup`,`dob`,`semester`,`department`) 
            VALUES ('$name', '$admno', '$password','$email','$phone','$address','$year','$gname','$gphone','$bgroup','$dob','$semester','$department');";
    if($con->query($sql) == true){
     echo "Successfully inserted";
     header("Location:login_student.php");
}
else{
  echo "error occured: $sql <br> $con->error";
}
$con->close();

}
else{
    echo '<script>
                window.location.href="index.php";
                alert("Username already exists!!");
            </script>';
}


}
?>