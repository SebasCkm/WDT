<?php
session_start();
?>

<?php
//Database connection
include 'dbConn.php';


$query1= "SELECT *, time_format(ActivityTime,'%H:%i') as time FROM tblactivities LIMIT 1";  //https://ubiq.co/database-blog/how-to-find-nth-row-in-mysql/
$result1=mysqli_query($connection, $query1); //https://stackoverflow.com/questions/1245306/getting-mysql-date-format-to-display-in-php

$query2= "SELECT *, time_format(ActivityTime,'%H:%i') as time FROM tblactivities LIMIT 1, 1";  //https://ubiq.co/database-blog/how-to-find-nth-row-in-mysql/
$result2=mysqli_query($connection, $query2); //https://stackoverflow.com/questions/1245306/getting-mysql-date-format-to-display-in-php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="APageStyles.css">
    
</head>
<body>
<div class="container">
        <div id="menu">
            <div id="nav"> 
                <img src="images/oldman.png" class="logo">

                <ul>
                    <li> <a style="text-decoration: none" href="logout.php" >Logout </a></li>
                    <li> <a style="text-decoration: none" href="enrollmentPage.php" >Enroll </a></li>
                </ul>
                <ul>
                  <li>                   
                    <?php
                        echo 'Welcome Back, '. $_SESSION['fullname'] . '<br>';
                    ?>               
                  </li>
                    <li> <a  style="text-decoration: none" href="Rhomepage.php" Home >Home</a></li>
                    <li>
                        About us
                        <ul>
                            <li> <a style="text-decoration: none" href="Rportfolio.php" >Portfolio </a> </li>
                            <li> <a style="text-decoration: none" href="Rour organization.php" >Our Organization </a></li>
                            <li> <a style="text-decoration: none" href="Rour cause.php" >Our Cause </a></li>
                        </ul>
                    </li>
                    <li> <a style="text-decoration: none" href="RServicePage.php" >Services </a></li>
                </ul>
            </div>
        </div>
        <H1 align="center">Activities Page</H1>

        <main>
    <div id="Activities flavor" class="info-area">
        <h2>Fun and Functional Activities</h2>
     <table id="Activities Page Table" cellspacing="10">
        <tr>
         <td><h3>Group Fun for a Healthy Body and Sharp Mind</h3></td>
     </tr>
        <tr>
          <td><p>Elderly people need to have fun too. At our elderly center, we will conduct at least one activity every week. <br>
          Our activities will be sure to stimulate the minds and make sure the elderly are moving thier bodies. <br>
          To keep one's mind sharp and body healthy is always a challage at any point in our lives. But through these activities, the elderly won't have any problem with it.<br>
           <br>
           <br> Below are the activities that will be held.
       </p></td>
     </tr>
     </table>
     </div>
     <table id="Squareinfoareatable" cellspacing="5">
  <tr>
    <td>
      <div id="Squareinfo-area" class="info-area">
      <h2>Activity 1</h2>
      <?php
        if (mysqli_num_rows($result1) > 0) {
        while ($row = mysqli_fetch_array($result1)) {
            echo "Activity: " . $row['ActivityName'] . "</br>";
            echo "Activity Description: " . $row['ActivityDescription'] . "</br>";
            echo "Activity Date: " . $row['ActivityDate'] . "</br>";
            echo "Activity Time: " . $row['time'] . "</br>";
         }
        }else {
          echo "No records found";
        }


?>
      </div>
    </td>
    <td>
      <div id="Squareinfo-area2" class="info-area">
        <h2>Activity 2</h2>
      <?php
        if (mysqli_num_rows($result2) > 0) {
        while ($row = mysqli_fetch_array($result2)) {
         echo "Activity: " . $row['ActivityName'] . "</br>";
         echo "Activity Description: " . $row['ActivityDescription'] . "</br>";
         echo "Activity Date: " . $row['ActivityDate'] . "</br>";
         echo "Activity Time: " . $row['time'] . "</br>";
         
         }
        }else {
          echo "No records found";
        }

?>