<?php
    session_start();

    
    //database connection
    include 'dbConn.php';

    if (isset($_POST['btnsubmit'])) {
        $customerid = $_SESSION['Cid']; 
        $firstname=$_POST['FName'];  
        $lastname=$_POST['LName'];  
        $Medical_Record=$_POST['medicalR'];  
        $age = $_POST['age'];
        $roomType = $_POST['RoomType'];

        $query = "INSERT INTO `tblenrolled`(`CustomerID`,`EFName`, `ELName`,`EMedicalR`,`EAge`,`ERoomType`) VALUE ('$customerid','$firstname', '$lastname', '$Medical_Record', '$age', '$roomType')";
        if (mysqli_query($connection, $query)) {
            // go back to login pages if successful
            header("Location: enrollmentAfter.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Page</title>
    <link rel="stylesheet" href="enrollmentStyle.css">
</head>
<body>
    <div class="container">
        <h2>Enrollment</h2>
        <!-- logo -->
        <div>
            <img src="images/oldman.png" alt="logo" class="logo">
        </div>
        <form action="" method="POST">
            <!-- First Name -->
            <div class="form-group">
                <label for="FName">Fisrt Name:</label>
                <input type="text" id="FName" name="FName" placeholder="Dominic" required>
            </div>
            <!-- Last Name -->
            <div class="form-group">
                <label for="LName">Last Name:</label>
                <input type="text" id="LName" name="LName" placeholder="Torreto" required>
            </div>
            <!-- Medical Record -->
            <div class="form-group">
                <label for="medicalR">Medical Record:</label>
                <input type="text" id="medicalR" name="medicalR" placeholder="If have any disability or any other illness, please list down here." required>
            </div>
            <!-- Age -->
            <div class="form-group">
                <label for="age">Age <span class="font-size">(please take note, only allowed minimum age 40)</span>:</label>
                <input type="number" id="age" name="age" placeholder="age" min="40" max="120" required>
            </div>
            <!-- Room Type A and B -->
            <div class="form-group">
                <label for="Room Type">Room Type</label>
                <select name="RoomType" id="RoomType" required>
                    <option value="">--Select Room Type--</option>
                    <option value="A">Type A (Shared)</option>
                    <option value="B">Type B (Single)</option>
                </select>
            </div>
            <!-- back to login page and home page-->
            <div class="form-group">
                <Button button type="submit" name="btnsubmit">Submit</Button>
                <a href="Rhomepage.php" class="btnhome">Back to Home</a>
            </div>
        </form>
    </div>
</body>
</html>