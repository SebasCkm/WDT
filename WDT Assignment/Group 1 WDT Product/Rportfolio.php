<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Styles2.css">
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
        <div class="portfolio pic1">
            <h5>Portfolio</h5>
            <p>Below you can access the portfolios of the developer that create this web application.</p>
            <br>                   

            <a class="link-style"href="Raboutyashmu.php"> Yashmu's Portfolio</a> <a class="link-style"href="RYABportfolio.php"> Yab Tian Poh's Portfolio</a>  <a class="link-style"href="RSEBportfolio.php"> Sebastian's Portfolio</a>                  
        </div>

            

</body>
</html>