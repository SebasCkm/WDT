    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>Admin Manage Staff Profile</h2>
        <?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Establish a new database connection
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'assignment';
    $connection = mysqli_connect($host, $user, $password, $database);

    $loadProfileQuery = "SELECT * FROM tblstaff WHERE StaffID = '$id'";
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
        
            $loadProfileQuery = "SELECT * FROM tblstaff WHERE StaffID = '$id'";
            $result = mysqli_query($connection, $loadProfileQuery);
        
            $row = mysqli_fetch_assoc($result);
            $count = mysqli_num_rows($result);
            if ($count == 1) {   //Checks for ID
                if (isset($_POST['btnStaffChange'])) { //Function Starts when btn is pressed, Takes txt from form and place into query
                    $staffFirstName = $_POST['StaffFirstNametxt'];
                    $staffLastName = $_POST['StaffLastNametxt'];
                    $staffEmail = $_POST['StaffEmailtxt'];
                    $staffPNumber = $_POST['StaffPNumbertxt'];
                    $qualification = $_POST['StaffQualificationtxt'];
                    //sql query
                    $updateQuery = "UPDATE tblstaff SET StaffFirstName = '$staffFirstName', StaffLastName = '$staffLastName',
                        StaffEmail = '$staffEmail', StaffPNumber = '$staffPNumber', StaffQualification = '$qualification'
                        WHERE StaffID = '$id'";
        
                    if (mysqli_query($connection, $updateQuery)) {
                        // Display success message
                        echo '<script>alert("Staff profile updated successfully.");</script>';
                        // You can redirect to another page or perform additional actions after the update
                    } else {
                        // Display error message
                        echo '<script>alert("Error updating staff profile: ' . mysqli_error($connection) . '");</script>';
                    }
                }
        ?>
                <!-- Form for editing staff profile -->
                <form action="" method="post">
                    Staff First Name: <input type="text" name="StaffFirstNametxt" value="<?php echo $row['StaffFirstName']; ?>"><br>
                    Staff Last Name: <input type="text" name="StaffLastNametxt" value="<?php echo $row['StaffLastName']; ?>"><br>
                    Staff Email: <input type="email" name="StaffEmailtxt" value="<?php echo $row['StaffEmail']; ?>"><br>
                    Staff Phone Number: <input type="text" name="StaffPNumbertxt" value="<?php echo $row['StaffPNumber']; ?>"><br>
                    Staff Qualification: <input type="text" name="StaffQualificationtxt" value="<?php echo $row['StaffQualification']; ?>"><br>
                    <input type="submit" value="Update Staff Profile" name="btnStaffChange">
                </form>
        
        <?php
            }
        }
}
}?>
        <br>
        <P>Click <a href="AdminStaffList.php">here</a> to go back to list.</P>
            </body>
            </html>