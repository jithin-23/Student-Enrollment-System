<?php
if (isset($_GET['id'])) {
    $studentId = $_GET['id'];
}
?>

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
 
$query="select * from `registration`.`student` where admno='$studentId'"; 
$result=mysqli_query($con ,$query); 

   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link rel="stylesheet" href="studenthome.css">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script src=""></script>
    <script src="p1.js"></script>
</head>
<body>
    <header>
        <h1>Student Details</h1>
    </header>

    <div class="tabm">
        <div class="tab">
            <table>
                <thead>
                    <tr>
                        <th>Admm.no</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Department</th>
                        <th>Year</th>
                        <th>Semester</th>
                        <th>Date-of-Birth</th>
                        <th>Guardian Name</th>
                        <th>Guardian Contact</th>
                        <th>Blood Group</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($rows = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $rows['admno']; ?></td>
                            <td><?php echo $rows['name']; ?></td>
                            <td><?php echo $rows['email']; ?></td>
                            <td><?php echo $rows['address']; ?></td>
                            <td><?php echo $rows['department']; ?></td>
                            <td><?php echo $rows['enrollYear']; ?></td>
                            <td><?php echo $rows['semester']; ?></td>
                            <td><?php echo $rows['dob']; ?></td>
                            <td><?php echo $rows['gname']; ?></td>
                            <td><?php echo $rows['gphone']; ?></td>
                            <td><?php echo $rows['bgroup']; ?></td>
                            <td>
                                <a href="updateStudent.php?id=<?php echo $rows['admno']; ?>">
                                    <button>Update</button>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

