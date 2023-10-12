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
    <link rel="stylesheet" href="styles.css">
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

        <div class="row">
            <div class="col">
                <h1>Old People</h1>
                <p>In the embrace of time's gentle touch, let us cherish our elders with love and care. Their wisdom and grace are treasures to behold, reminding us of the beauty in every passing moment.</p>
            </div>
            <div class="pic pic1">
                <h5>About Us</h5>
                <p>Within the walls of a nurturing haven, let us create homes that cradle our beloved elders with compassion and dignity. A sanctuary where their hearts find solace, their spirits find refuge, and their stories find eager listeners. In these loving spaces, we honor their legacy and ensure their golden years are filled with comfort, security, and a sense of belonging.</p>
            </div>
        </div>
    </div>
</body>
</html>

