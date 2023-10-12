<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>Admin Manage Enrolled Customer Profile</h2>
        <?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Establish a new database connection
    include 'dbConn.php';

    $loadProfileQuery = "SELECT * FROM tblenrolled WHERE EnrolledID = '$id'"; 
    $result = mysqli_query($connection, $loadProfileQuery);

    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            // Establish a new database connection
            $host = 'localhost';
            $user = 'root';
            $password = '';
            $database = 'assignment';
            $connection = mysqli_connect($host, $user, $password, $database);
        
            $loadProfileQuery = "SELECT * FROM tblenrolled WHERE EnrolledID = '$id'"; 
            $result = mysqli_query($connection, $loadProfileQuery);
        
            $row = mysqli_fetch_assoc($result);
            $count = mysqli_num_rows($result);
            if ($count == 1) {   //Checks for ID
                if (isset($_POST['btnStaffChange'])) { //Function Starts when btn is pressed, Takes txt from form and place into query
                    $EnrolledFName = $_POST['EnrolledFNametxt'];
                    $EnrolledLName = $_POST['EnrolledLNametxt'];
                    $EnrolledMRecord = $_POST['EnrolledMRecordtxt'];
                    $EnrolledAge = $_POST['EnrolledAgetxt'];
                    $EnrolledRType = $_POST['EnrolledRTypetxt'];
                    //sql query
                    $updateQuery = "UPDATE tblenrolled SET EFName = '$EnrolledFName', ELName = '$EnrolledLName',
                        EMedicalR = '$EnrolledMRecord', EAge = '$EnrolledAge', ERoomType = '$EnrolledRType'
                        WHERE EnrolledID = '$id'";
        
                    if (mysqli_query($connection, $updateQuery)) {
                        // Display success message
                        echo '<script>alert("Staff profile updated successfully.");</script>';
                        // You can redirect to another page or perform additional actions after the update
                    } else {
                        // Display error message
                        echo '<script>alert("Error updating staff profile. ' . mysqli_error($connection) . '");</script>';
                    }
                }
        ?>
                <!-- Form for editing staff profile -->
                <form action="" method="post">
                Enrolled First Name: <input type="text" name="EnrolledFNametxt" value="<?php echo $row['EFName']; ?>"><br>
                Enrolled Last Name: <input type="text" name="EnrolledLNametxt" value="<?php echo $row['ELName']; ?>"><br>
                Enrolled Medical Record: <input type="text" name="EnrolledMRecordtxt" value="<?php echo $row['EMedicalR']; ?>"><br>
                Enrolled Age: <input type="int" name="EnrolledAgetxt" value="<?php echo $row['EAge']; ?>"><br>
                Enrolled Room Type: <input type="text" name="EnrolledRTypetxt" value="<?php echo $row['ERoomType']; ?>"><br>
                    <input type="submit" value="Update Enrolled Profile" name="btnStaffChange">
                </form>
        
        <?php
            }
        }
}
}?>
        <br>
        <P>Click <a href="AdminEnrolledList.php">here</a> to go back to list.</P>
            </body>
            </html>