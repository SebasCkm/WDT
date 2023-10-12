<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>Admin Manage Registered Customer Profile</h2>
        <?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Establish a new database connection
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'assignment';
    $connection = mysqli_connect($host, $user, $password, $database);

    $loadProfileQuery = "SELECT * FROM tblcustomer WHERE CustomerID = '$id'"; //Change Batabase Table
    $result = mysqli_query($connection, $loadProfileQuery);

    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            // Establish a new database connection
            include 'dbConn.php';
        
            $loadProfileQuery = "SELECT * FROM tblcustomer WHERE CustomerID = '$id'"; //Change Batabase Table
            $result = mysqli_query($connection, $loadProfileQuery);
        
            $row = mysqli_fetch_assoc($result);
            $count = mysqli_num_rows($result);
            if ($count == 1) {   //Checks for ID
                if (isset($_POST['btnStaffChange'])) { //Function Starts when btn is pressed, Takes txt from form and place into query
                    $CustomerFName = $_POST['CustomerFirstNametxt'];
                    $CustomerLName = $_POST['CustomerLastNametxt'];
                    $CustomerPassword = $_POST['CustomerPasswordtxt'];
                    $CustomerPNumber = $_POST['CustomerPNumbertxt'];
                    $CustomerEmail = $_POST['CustomerEmailtxt'];
                    //sql query
                    $updateQuery = "UPDATE tblcustomer SET CFName = '$CustomerFName', CLName = '$CustomerLName',
                        CPassword = '$CustomerPassword', CPNumber = '$CustomerPNumber', CEmail = '$CustomerEmail'
                        WHERE CustomerID = '$id'";
        
                    if (mysqli_query($connection, $updateQuery)) {
                        // Display success message
                        echo '<script>alert("Customer profile updated successfully.");</script>';
                        // You can redirect to another page or perform additional actions after the update
                    } else {
                        // Display error message
                        echo '<script>alert("Error updating Customer profile. ' . mysqli_error($connection) . '");</script>';
                    }
                }
        ?>
                <!-- Form for editing staff profile -->
                <form action="" method="post">
                Customer First Name: <input type="text" name="CustomerFirstNametxt" value="<?php echo $row['CFName']; ?>"><br>
                Customer Last Name: <input type="text" name="CustomerLastNametxt" value="<?php echo $row['CLName']; ?>"><br>
                Customer Password: <input type="password" name="CustomerPasswordtxt" value="<?php echo $row['CPassword']; ?>"><br>
                Customer Phone Number: <input type="text" name="CustomerPNumbertxt" value="<?php echo $row['CPNumber']; ?>"><br>
                Customer Email: <input type="email" name="CustomerEmailtxt" value="<?php echo $row['CEmail']; ?>"><br>
                    <input type="submit" value="Update Customer Profile" name="btnStaffChange">
                </form>
        
        <?php
            }
        }
}
}?>
        <br>
        <P>Click <a href="AdminRCustomerList.php">here</a> to go back to list.</P>
            </body>
            </html>