<?php
// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    // Get the student ID from the URL parameter
    $studentId = $_GET['id'];

    // Fetch student details based on the ID (replace this with your database query or data retrieval logic)
    $studentDetails = getStudentDetails($studentId);

    // Check if the student details were found
    if ($studentDetails) {
       
    } else {
        // Handle the case where student details are not found
        echo "Student not found";
    }
} else {
    // Handle the case where 'id' parameter is not set
    echo "Student ID not provided";
}

// Function to fetch student details (replace this with your actual database query)
function getStudentDetails($studentId) {
    // Perform your database query to fetch details based on the provided student ID
    // ...

    // For this example, return a hardcoded array; replace this with your database logic
    return [
        'id' => $studentId,
        'name' => 'John Doe', // Replace with actual name from your database
        // Add other details as needed
    ];
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



$query="select * from `registration`.`student` where admno='$studentId' "; 
$result=mysqli_query($con ,$query); 



 
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>
  <link rel="stylesheet" href="p1.css">

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
   <script src=""></script>
  <script src="p1.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-custom navbar-mainbg">

      <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars text-white"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
              <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
             
              <li class="nav-item active ">
                  <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Student Details</a>
              </li>
          
          </ul>
      </div>
  </nav>
  <div class="outer">
  <div class="tabm">
  <div class="tab">
  <table align="center" border="0px" > 
  <tr> 
      <th colspan="4"><h2>Student Details</h2></th> 
      </tr> 
      <tr class="xx">
            <th> Admm.no </th> 
            <th> Name </th> 
            <th> Email </th> 
            <th> Address </th> 
            <th> Department </th> 
            <th>Year</th> 
            <th> Semester </th> 
            <th> Date-of-Birth </th> 
            <th> Guardian Name </th> 
            <th> Guardian Contact </th>
             <th> Blood Group  </th> 
            
            
      </tr> 
      
      <?php while($rows=mysqli_fetch_assoc($result)) 
      { 
      ?> 
      <tr> <td ><?php echo $rows['admno']; ?></td> 
      <td><?php echo $rows['name']; ?></td> 
      <td><?php echo $rows['email']; ?></td> 
      <td><?php echo $rows['address']; ?></td>
      <td><?php echo $rows['department']; ?></td> 
      <td ><?php echo $rows['enrollYear']; ?></td> 
      <td><?php echo $rows['semester']; ?></td> 
      <td><?php echo $rows['dob']; ?></td> 
      <td><?php echo $rows['gname']; ?></td> 
      <td><?php echo $rows['gphone']; ?></td> 
      <td><?php echo $rows['bgroup']; ?></td> 
      </tr> 
  <?php 
             } 
        ?> 

  </table> 
  </div>
   
  </div>
  
  </div>
  </div>
  <script src="button.js"></script>
    <link rel="stylesheet" href="button.css">
    <button class="top-right-button" onclick="redirectToHome()">Log-out</button>

</body>

</html>

