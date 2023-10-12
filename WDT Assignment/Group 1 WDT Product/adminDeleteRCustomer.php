<?php
// get id of user
if (isset($_GET['id']))
    $id = $_GET['id'];

//Database connection
include 'dbConn.php';

    // delete staff
    $query = "DELETE FROM tblcustomer WHERE CustomerID =  '$id'";  //Change Batabase Table
    if(mysqli_query($connection, $query)){
        header("location:AdminRCustomerList.php");
    }
    