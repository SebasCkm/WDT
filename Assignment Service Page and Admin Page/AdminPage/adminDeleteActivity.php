<?php
// get id of user
if (isset($_GET['id']))
    $id = $_GET['id'];

//Database connection
$host = 'Localhost'; // 127.0.0.1
$user =  'root';
$password = '';
$database = 'assignment';
$connection = mysqli_connect($host, $user, $password, $database);

    // delete staff
    $query = "DELETE FROM tblactivities WHERE ActivityID =  '$id'";
    if(mysqli_query($connection, $query)){
        header("location:AdminActivitiesList.php");
    }
    