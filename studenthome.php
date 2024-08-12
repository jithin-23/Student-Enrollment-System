<?php
// Check if 'id' is set in the URL
if (isset($_GET['id'])) {
    $studentId = $_GET['id'];

    // Connect to the database
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("Connection to the database failed due to" . mysqli_connect_error());
    }

    // Retrieve the name from the student table
    $query = "SELECT name FROM `registration`.`student` WHERE admno='$studentId'";
    $resultName = mysqli_query($con, $query);

    if ($resultName && $rowName = mysqli_fetch_assoc($resultName)) {
        $welcomeName = $rowName['name'];
    } else {
        $welcomeName = "Guest";
    }

    // Retrieve other details from the student table
    $queryDetails = "SELECT * FROM `registration`.`student` WHERE admno='$studentId'";
    $resultDetails = mysqli_query($con, $queryDetails);

    // Close the database connection
    mysqli_close($con);
} else {
    // If 'id' is not set, set a default value
    $welcomeName = "Guest";
    $resultDetails = false;
}
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
    <script src="button.js"></script>
    <link rel="stylesheet" href="button.css">
    
</head>
<body>

    <header>
        <h1>Welcome, <?php echo $welcomeName; ?></h1>
        
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
                    <?php while($rows = mysqli_fetch_assoc($resultDetails)) { ?>
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
    <button class="top-right-button" onclick="redirectToHome()">Log-out</button>

</body>
</html>
