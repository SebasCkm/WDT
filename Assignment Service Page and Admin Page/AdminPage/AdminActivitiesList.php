<?php
//Database connection
$host = 'Localhost'; // 127.0.0.1
$user =  'root';
$password = '';
$database = 'assignment';
$connection = mysqli_connect($host, $user, $password, $database);

$query= "SELECT *, time_format(ActivityTime,'%H:%i') as time FROM tblactivities"; //https://stackoverflow.com/questions/1245306/getting-mysql-date-format-to-display-in-php
$result=mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- To confirm staff deletion --> 
    <script> 
        function DeleteConfirm() {
            return confirm("Are you sure you want to delete this Activitiy?");
        }
    </script>
</head>
<body>
    <h2>Admin Activity List</h2>
</body>
</html>
<?php
echo "<Table border = 1>
<tr>
    <th>Activity ID</th>
    <th>Activity Name</th>
    <th>Activity Description</th>
    <th>Activity Date</th>
    <th>Activity Time</th>
    <th colspan = 2>Action</th>
</tr>";

if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['ActivityID'] . "</td>";
        echo "<td>" . $row['ActivityName'] . "</td>";
        echo "<td>" . $row['ActivityDescription'] . "</td>";
        echo "<td>" . $row['ActivityDate'] . "</td>";
        echo "<td>" . $row['time'] . "</td>";
        echo "<td><a href=\"adminManageActivity.php?id=" . $row['ActivityID'] . "\">Edit</a></td>";
        echo "<td><a href=\"adminDeleteActivity.php?id=" . $row['ActivityID'] . "\" onclick=\"return DeleteConfirm();\">Delete</td>";
        echo "</tr>";
    }

    }else{
        echo "No Records Found";
    }
    echo "</table>";
    ?>


<body>
    <!-- Form to add new Activity -->
    <H2>Add New Staff</H2>
    <p>If you wish to add a new activity, click <a href="adminAddActivity.php">here</a>.<br>
        If you wish to go back to admin page, click <a href="AdminPage.php">here</a>.</p>
</body>