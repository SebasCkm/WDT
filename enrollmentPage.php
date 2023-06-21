<?php
    session_start();
    //database connection
    $host = 'localhost';
    $user = 'tblenrolled';
    $password = '';
    $database = 'wdtassgm';
    $connection = mysqli_connect($host, $user, $password, $database);

    if (isset($_POST['btnsubmit'])) {
        $customerid = $_SESSION['CustomerID']; 
        $firstname=$_POST['FName'];  
        $lastname=$_POST['LName'];  
        $Medical_Record=$_POST['medicalR'];  
        $age = $_POST['age'];
        $roomType = $_POST['roomType'];

        $query = "INSERT INTO `tblenrolled`(`CustomerID`,`EFName`, `ELName`,`EMedicalR`,`EAge`,`EroomType`) VALUE ('$customerid','$firstname', '$lastname', '$Medical_Record', '$age', '$roomType')";
        if (mysqli_query($connection, $query)) {
            // go back to login pages if successful
            header("Location: afterenrol.php");
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
            <img src="image/oldman.jpg" alt="logo" class="logo">
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
                <input type="text" id="medicalR" name="medicalR" placeholder="if have any disability or any other illness, please list down here" required>
            </div>
            <!-- Age -->
            <div class="form-group">
                <label for="age">Age <span class="font-size">(please take note, only allowed minimum age 40)</span>:</label>
                <input type="number" id="age" name="age" placeholder="age" min="40" max="100" required>
            </div>
            <!-- Room Type A and B -->
            <div class="roomType">
                <table>
                    <tr>
                        <td>
                        <label for="roomType"><u>Room Type</u>:</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <img src="image/sharedRoom.jpg" alt="Type A" id="roomPic"><br>
                        <input type="radio" id="roomTypeA" name="roomType" required>
                        <label for="roomTypeA">Type A - Shared Room</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <img src="image/singleroom.jpg" alt="Type B" id="roomPic"><br>
                        <input type="radio" id="roomTypeB" name="roomType" required>
                        <label for="roomTypeB">Type B - Single Room</label>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- back to login page and home page-->
            <div class="form-group">
                <a href="YABportfolio.html" class="button" name="btnsubmit">submit</a>
                <a href=" home page " class="btnhome">back to home</a>
            </div>
        </form>
    </div>
</body>
</html>