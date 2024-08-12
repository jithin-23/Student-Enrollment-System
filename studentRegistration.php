<?php
    include("register.php");
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
        <form action="register.php" method="post" name="form1">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
        
                <label for="admno"><b>Admission Number</b></label>
                <input type="text" name="admno" id="admno" placeholder="Enter Admission Nmber" required>
    
                <label for="psw"><b>Password</b></label>
                <input type="password" name="psw" id="psw"  placeholder="Enter Password" required>
    
                <label for="name"><b>Full Name</b></label>
                <input type="text" name="name" id="name" placeholder="Enter Name" required>

                <label for="email"><b>Email</b></label>
                <input type="email" name="email" id="email" placeholder="Enter Email" required>
    
               <label for="phone"><b>Phone Number</b></label>
               <input type="tel"name="phone" id="phone"  placeholder="Enter Phone Number"  pattern="[0-9]{10}" required>
    
               <label for="address"><b>Address</b></label>
               <input type="text" name="address" id="address" placeholder="Enter Address" required>
              
               <label for="department"><b>Choose Department:</b></label>
               <select name="department" id="department">
               <option value="Computer Science and Engineering">Computer Science </option>
                   <option value="Electronics and Communication Engineering">Electronic and Communication</option>
                   <option value="Electrical and Electronics Engineering">Electrical and Electronics</option>
                   <option value="Mechanical Engineering">Mechanical </option>
                   <option value="Civil Engineering">Civil </option>
               </select>
    
               <label for="year"><b>Enrollment Year</b></label>
               <input type="tel" name="year" id="year" placeholder="Enter Enrollment Year" pattern="[0-9]{4}" required>
              
               <label for="language"><b>Select Semester:</b></label>
               <select name="semester" id="semester">
                  <option value="S1">Semester 1 </option>
                  <option value="S3">Semester 3 </option>
                  <option value="S5">Semester 5 </option>
                  <option value="S7">Semester 7 </option>
              </select>
    
              <label for="dob"><b>Date of Birth</b></label>
              <input type="date" name="dob" id="dob" required>
    
              <label for="gname"><b>Guardian Name</b></label>
              <input type="text" name="gname" id="gname" placeholder="Enter Guardian Name" required>
    
              <label for="gphone"><b>Guardian Phone Number</b></label>
              <input type="tel"name="gphone" id="gphone"  placeholder="Enter Guardian Phone Number"  pattern="[0-9]{10}" required>
    
              <label for="bgroup"><b>Blood Group</b></label>
              <input type="text" name="bgroup" id="bgroup" placeholder="Enter Blood Group" required>
              <input type="checkbox" required>
              <b> By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a></b>
          
              <div class="clearfix">
          
              <button type="submit" name="btn" class="btn">Sign Up</button>
                
              </div>
              
            </div>
          </form>
    </div>

</body>
</html>