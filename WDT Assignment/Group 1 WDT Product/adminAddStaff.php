<?php
//Database connection
include 'dbConn.php';

// Check if button is pressed
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Take input data from Add New Staff Form
    $firstName = $_POST['NewStaffFirstNametxt'];
    $lastName = $_POST['NewStaffLastNametxt'];
    $email = $_POST['NewStaffEmailtxt'];
    $phoneNumber = $_POST['NewStaffPNumbertxt'];
    $qualification = $_POST['NewStaffQualificationtxt'];

    // Query to add new staff info
    $query = "INSERT INTO tblstaff (StaffFirstName, StaffLastName, StaffEmail, StaffPNumber, StaffQualification) 
    VALUES ('$firstName', '$lastName', '$email', '$phoneNumber', '$qualification')";
$result = mysqli_query($connection, $query);

if ($result) {
    header("Location: AdminStaffList.php");
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- Form to add new Staff -->
     <H2>Add New Staff</H2>
    <form method="POST" action="">
    New Staff First Name: <input type="text" name="NewStaffFirstNametxt" ><br>
    New Staff Last Name: <input type="text" name="NewStaffLastNametxt"><br>
    New Staff Email: <input type="email" name="NewStaffEmailtxt"><br>
    New Staff Phone Number: <input type="text" name="NewStaffPNumbertxt"><br>
    New Staff Qualification: <input type="text" name="NewStaffQualificationtxt"><br>

        <input type="submit" value="Add Staff">
    </form>
    <Main>
    Click <a href="AdminStaffList.php">here</a> to go back to Admin Staff List.
    </Main>
</body>
</html>