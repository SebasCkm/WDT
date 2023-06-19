<?php
//Database connection
$host = 'Localhost'; // 127.0.0.1
$user =  'root';
$password = '';
$database = 'assignment';
$connection = mysqli_connect($host, $user, $password, $database);

// Check if button is pressed
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Take input data from Add New Activity Form
    $activityName = $_POST['ActivityNametxt'];
    $activityDescription = $_POST['ActivityDescriptiontxt'];
    $activityDate = $_POST['ActivityDatetxt'];
    $activityTime = $_POST['ActivityTimetxt'];

    // Query to add new staff info
    $query = "INSERT INTO tblactivities (ActivityName, ActivityDescription, ActivityDate, ActivityTime) 
    VALUES ('$activityName', '$activityDescription', '$activityDate', '$activityTime')";
$result = mysqli_query($connection, $query);

if ($result) {
    header("Location: AdminactivitiesList.php");
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
        New Activity Name: <input type="text" name="ActivityNametxt" ><br>
        New Activity Description: <input type="text" name="ActivityDescriptiontxt" ><br>
        New Activity Date: <input type="date" name="ActivityDatetxt" ><br>
        New Activity Time: <input type="time" name="ActivityTimetxt" ><br>

        <input type="submit" value="Add Activity">
    </form>
</body>
</html>