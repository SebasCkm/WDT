<?php
//Database connection
include 'dbConn.php';

// if(!$connection) {
//     //die is end and exit
//     die('Connection Failed: ' . mysqli_connect_error());
// } else {
//     echo 'Connection Established <br>';
// }

$query= "SELECT * FROM tblstaff"; 
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
            return confirm("Are you sure you want to delete this staff?");
        }
    </script>
</head>
<body>
    <h2>Admin Staff List</h2>
</body>
</html>
<?php
echo "<Table border = 1>
<tr>
    <th>Staff ID</th>
    <th>Staff First Name</th>
    <th>Staff Last Name</th>
    <th>Staff Email</th>
    <th>Staff PNumber</th>
    <th>Qualification</th>
    <th colspan = 2>Action</th>
</tr>";

if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['StaffID'] . "</td>";
        echo "<td>" . $row['StaffFirstName'] . "</td>";
        echo "<td>" . $row['StaffLastName'] . "</td>";
        echo "<td>" . $row['StaffEmail'] . "</td>";
        echo "<td>" . $row['StaffPNumber'] . "</td>";
        echo "<td>" . $row['StaffQualification'] . "</td>";
        echo "<td><a href=\"adminManageStaff.php?id=" . $row['StaffID'] . "\">Edit</a></td>";
        echo "<td><a href=\"adminDeleteStaff.php?id=" . $row['StaffID'] . "\" onclick=\"return DeleteConfirm();\">Delete</td>";
        echo "</tr>";
    }

    }else{
        echo "No Records Found";
    }
    echo "</table>";
    ?>


<body>
    <!-- Form to add new Staff -->
    <H2>Add New Staff</H2>
    <p>If you wish to add new staff, click <a href="adminAddStaff.php">here</a> <br>
        If you wish to go back to admin page, click <a href="AdminPage.php">here</a></p>
</body>
