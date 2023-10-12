<?php
//Database connection
include 'dbConn.php';

$query= "SELECT * FROM tblenrolled";  //Havent got database
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
            return confirm("Are you sure you want to delete this Enrolled Customer?");
        }
    </script>
</head>
<body>
    <h2>Admin Enrolled Customer List</h2>
</body>
</html>
<?php
echo "<Table border = 1>
<tr>
    <th>Enrolled ID</th>
    <th>Customer ID</th>
    <th>Enrolled First Name</th>
    <th>Enrolled Last Name</th>
    <th>Medical Record</th>
    <th>Enrolled Age</th>
    <th>Room Type</th>
    <th colspan = 2>Action</th>
</tr>";

if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['EnrolledID'] . "</td>";
        echo "<td>" . $row['CustomerID'] . "</td>";
        echo "<td>" . $row['EFName'] . "</td>";
        echo "<td>" . $row['ELName'] . "</td>";
        echo "<td>" . $row['EMedicalR'] . "</td>";
        echo "<td>" . $row['EAge'] . "</td>";
        echo "<td>" . $row['ERoomType'] . "</td>";
        echo "<td><a href=\"adminManageEnrolled.php?id=" . $row['EnrolledID'] . "\">Edit</a></td>";
        echo "<td><a href=\"adminDeleteEnrolled.php?id=" . $row['EnrolledID'] . "\" onclick=\"return DeleteConfirm();\">Delete</td>";
        echo "</tr>";
    }

    }else{
        echo "No Records Found";
    }
    echo "</table>";
    ?>


<body>
    <p>
        If you wish to go back to admin page, click <a href="AdminPage.php">here</a></p>
</body>