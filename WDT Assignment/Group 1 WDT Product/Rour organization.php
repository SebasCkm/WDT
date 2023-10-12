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

        <div class="organization pic3">
            <h5>Our Organization</h5>
            <p>We are from the Elderly Home's Club. The Elderly Home's Club is a social welfare organization that offers shelter, support and medical
services to poor seniors. It is a non-profit organisation. By establishing homes for the elderly, the
organisation hopes that the poor and the homeless can now have a place where they can call their
homes, where they can also enjoy a better quality of life.</p>
        </div>
</body>
</html>