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
    <link rel="stylesheet" href="AccomodationPageStyles.css">
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
        <h1 align="center">Accomodations Page</h1>
    <main>
    <div id="Accomodation flavor" class="info-area">
        <h2>Our Accomodations</h2>
     <table id="Accomodation Page Table" cellspacing="5">
        <tr>
         <td><h3>A Safe Space for One to Relax and Feel at Home</h3></td>
     </tr>
        <tr>
          <td><p> To live alone is unpleasant. Therefor we offer accomodation that lets the elderly be able to live together in thier own safe space. <br>
          Not only that, we know that some elderly prefer to be alone, we offer accomodation for that too. <br>
          To give the elderly a place to call home, a place where they can relax and know that they have a safe place to be. <br> 
           <br>
           <br> Below are the accomodations that we offer.
       </p></td>
     </tr>
     </table>
     </div>
     <table id="Squareinfoareatable" cellspacing="50">
  <tr>
    <td>
      <div id="Squareinfo-area" class="info-area">
      <h2>Accomodation type A</h2>
      <p>In accomodation type A, it is an apartment with three rooms and a common area, kitchen and two toilets. <br> 
    If you choose Accomodation type A, the elderly will need to share the apartment with other elderly.<br>
    Below is a picture of the apartment.</p>
    <img src="images/Apartment A 1.jpg" class="AccomodationPic">
    

      </div>
    </td>

    <table id="Squareinfoareatable" cellspacing="5">
  <tr>
    <td>
      <div id="Squareinfo-area" class="info-area">
      <h2>Accomodation type B</h2>
      <p>In accomodation type B, it is a studio apartment with a kitchen and one toilet. <br> 
    If you choose Accomodation type B, the elderly will not need to share the apartment with other elderly.<br>
    Below is a picture of the apartment.</p>
    <img src="images/Apartment B 1.jpg" class="AccomodationPic">
    

      </div>
    </td>