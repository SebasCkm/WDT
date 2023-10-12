<?php
// get id of user
if (isset($_GET['id']))
    $id = $_GET['id'];

//Database connection
include 'dbConn.php';

    // delete staff
    $query = "DELETE FROM tblenrolled WHERE EnrolledID =  '$id'";  
    if(mysqli_query($connection, $query)){
        header("location:AdminEnrolledList.php");
    }
    