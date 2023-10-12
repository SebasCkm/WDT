<?php
//Database connection
include 'dbConn.php';

$query= "SELECT * FROM tblcustomer";  
$result=mysqli_query($connection, $query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- To confirm  deletion --> 
    <script> 
        function DeleteConfirm() {
            return confirm("Are you sure you want to delete this Registered Customer?");
        }
    </script>
</head>
<body>
    <h2>Admin Registered Customer List</h2>
</body>
</html>
<?php
echo "<Table border = 1>
<tr>
    <th>Customer ID</th>
    <th>Customer First Name</th>
    <th>Customer Last Name</th>
    <th>Customer Password</th>
    <th>Customer PNumber</th>
    <th>Customer Email</th>
    <th colspan = 2>Action</th>
</tr>";

if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['CustomerID'] . "</td>";
        echo "<td>" . $row['CFName'] . "</td>";
        echo "<td>" . $row['CLName'] . "</td>";
        echo "<td>" . $row['CPassword'] . "</td>";
        echo "<td>" . $row['CPNumber'] . "</td>";
        echo "<td>" . $row['CEmail'] . "</td>";
        echo "<td><a href=\"adminManageRCustomer.php?id=" . $row['CustomerID'] . "\">Edit</a></td>";
        echo "<td><a href=\"adminDeleteRCustomer.php?id=" . $row['CustomerID'] . "\" onclick=\"return DeleteConfirm();\">Delete</td>";
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