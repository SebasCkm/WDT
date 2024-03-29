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
    <link rel="stylesheet" href="SPageStyles.css">
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
        <h1 align="center">Service Page</h1>
<main>
<div id="Accommodation tab" class="info-area">
  <h2>Accommodation</h2>
    <table id="Accommodation Table" cellspacing="10">
    <tr>
      <td><h3>Confortable and Safe Spaces</h3></td>
    </tr>
    <tr>
      <td><p>We offer accommodation that is confortable and with the staff and other residences around, you won't feel out of place.</p></td>
    </tr>
    </table>
    <a href="RAccomodationPage.php" class="link-style" id="AccommodationLink" >Go to Accommodation Page</a>
</div>

    <div id = "Staff tab" class="info-area">
      <h2>Staff</h2>
      <table id="Staff Table" cellspacing="10">
    <tr>
      <td><h3>Kind, Caring and Loving</h3></td>
    </tr>
    <tr>
      <td><p>With the help of our friendly and qualified staff, the elderly won't have any problems facing everyday.<br> They'll keep them company, safe and happy.</p></td>
    </tr>
    </table> 
    <a href="RStaffPage.php" class="link-style" id="StaffLink">Go to Staff Page</a> 
    </div>

    <div  id = "Activites tab" class="info-area">
      <h2>Activities</h2>
      <table id="Activities Table" cellspacing="10">
    <tr>
      <td><h3>Fun, Interactive and Good for Cognative Health</h3></td> 
    </tr>
    <tr>
      <td><p>Twice every week, the Staff will be holding activities that are fun for the elderly.<br>Not only that, the activities are helpful in keeping both the mind and body sharp and healthy.</p></td>
    </tr>
    </table> 
    <a href="RActivitiesPage.php" class="link-style" id="ActivitiesLink">Go to Activities Page</a>
    </div>
  </main>
    </div>
</body>
</html>
