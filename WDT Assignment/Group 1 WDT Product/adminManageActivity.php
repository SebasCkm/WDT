<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>Admin Manage Activity</h2>
        <?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Establish a new database connection
    include 'dbConn.php';
    $loadProfileQuery = "SELECT * FROM tblactivities WHERE ActivityID = '$id'";
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
        
            $loadProfileQuery = "SELECT * FROM tblactivities WHERE ActivityID = '$id'";
            $result = mysqli_query($connection, $loadProfileQuery);
        
            $row = mysqli_fetch_assoc($result);
            $count = mysqli_num_rows($result);
            if ($count == 1) {   //Checks for ID
                if (isset($_POST['btnStaffChange'])) { //Function Starts when btn is pressed, Takes txt from form and place into query
                    $activityName = $_POST['ActivityNametxt'];
                    $activityDescription = $_POST['ActivityDescriptiontxt'];
                    $activityDate = $_POST['ActivityDatetxt'];
                    $activityTime = $_POST['ActivityTimetxt'];
                    //sql query
                    $updateQuery = "UPDATE tblactivities SET ActivityName = '$activityName', ActivityDescription = '$activityDescription',
                        ActivityDate = '$activityDate', ActivityTime = '$activityTime'  WHERE ActivityID = '$id'";
        
                    if (mysqli_query($connection, $updateQuery)) {
                        // Display success message
                        echo '<script>alert("Activity updated successfully.");</script>';
                        // You can redirect to another page or perform additional actions after the update
                    } else {
                        // Display error message
                        echo '<script>alert("Error updating Activity. ' . mysqli_error($connection) . '");</script>';
                    }
                }
        ?>
                <!-- Form for editing staff profile -->
                <form action="" method="post">
                    Activity Name: <input type="text" name="ActivityNametxt" value="<?php echo $row['ActivityName']; ?>"><br>
                    Activity Description: <input type="text" name="ActivityDescriptiontxt" value="<?php echo $row['ActivityDescription']; ?>"><br>
                    Activity Date: <input type="date" name="ActivityDatetxt" value="<?php echo $row['ActivityDate']; ?>"><br>
                    Activity Time: <input type="time" name="ActivityTimetxt" value="<?php echo $row['ActivityTime']; ?>"><br>
                  <input type="submit" value="Update Staff Profile" name="btnStaffChange">
                </form>
        
        <?php
            }
        }
}
}?>
        <br>
        <P>Click <a href="AdminActivitiesList.php">here</a> to go back to list.</P>
            </body>
            </html>