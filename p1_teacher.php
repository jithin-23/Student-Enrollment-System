<?php
// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    // Get the student ID from the URL parameter
    $studentId = $_GET['id'];

    // Fetch student details based on the ID (replace this with your database query or data retrieval logic)
    $studentDetails = getStudentDetails($studentId);

    // Check if the student details were found
    if (!$studentDetails) {
        // Handle the case where student details are not found
        echo "Student not found";
        exit(); // Exit to prevent further execution
    }
} else {
    // Handle the case where 'id' parameter is not set
    echo "Student ID not provided";
    exit(); // Exit to prevent further execution
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

// Establish database connection
$server = "localhost";
$username = "root";
$password = "";
$database = "registration";

$con = mysqli_connect($server, $username, $password, $database);
if (!$con) {
    die("Connection to the database failed due to" . mysqli_connect_error());
}

// Query to fetch student records for different semesters
$query = "SELECT *
FROM `registration`.`student`
INNER JOIN `registration`.`hod` ON `registration`.`student`.department = `registration`.`hod`.DEPARTMENT AND `registration`.`hod`.FACULTY_ID='$studentId'";

$result = mysqli_query($con, $query);

// Check if the query was successful
if (!$result) {
    echo "Query failed: " . mysqli_error($con);
    exit(); // Exit to prevent further execution
}

// Fetch all rows and store them in an array
$allRows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $allRows[] = $row;
}

// Close the database connection
mysqli_close($con);
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
                    <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="p1_teacher_faculty.php?id=<?php echo urlencode($studentId); ?>">
                        <i class="far fa-address-book"></i>Faculty
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="outer">
    <?php
    // Iterate through semesters and display a table for each
    $semesters = ['S1', 'S3', 'S5', 'S7'];

    foreach ($semesters as $semester) {
        echo "<div class='tabm'>";
        echo "<div class='tab'>";
        echo "<table align='center' border='0px' > ";
        echo "<tr> <th colspan='4'><h2>Student Record: $semester</h2></th> </tr> ";
        echo "<tr class='xx'> <th>ID</th> <th>Name</th> </tr>";

        // Display data for the current semester
        foreach ($allRows as $rows) {
            // Check if the current row belongs to the current semester
            if ($rows['semester'] == $semester) {
                echo "<tr> ";
                echo "<td onclick='getCellContent(this)' class='name_id'>" . $rows['admno'] . "</td> ";
                echo "<td>" . $rows['name'] . "</td> ";
                echo "</tr> ";
            }
        }

        echo "</table>";
        echo "</div>";
        echo "</div>";
    }
    ?>
    </div>
    <script src="button.js"></script>
    <link rel="stylesheet" href="button.css">
    <button class="top-right-button" onclick="redirectToHome()">Log-out</button>

</body>
</html>

<script>
    // Add click event listener to each student row
    function getCellContent(cell) {
        var content = cell.innerHTML;
        console.log(content);

        // Redirect to the PHP file with the student details
        window.location.href = 'details.php?id=' + content;
    }
</script>