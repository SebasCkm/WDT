<?php
//Database connection
$host = 'Localhost'; // 127.0.0.1
$user =  'root';
$password = '';
$database = 'assignment';
$connection = mysqli_connect($host, $user, $password, $database);


$query1= "SELECT * FROM tblstaff LIMIT 1";  //https://ubiq.co/database-blog/how-to-find-nth-row-in-mysql/
$result1=mysqli_query($connection, $query1);

$query2= "SELECT * FROM tblstaff LIMIT 1,1";  //https://ubiq.co/database-blog/how-to-find-nth-row-in-mysql/
$result2=mysqli_query($connection, $query2);

$query3= "SELECT * FROM tblstaff LIMIT 2,1";  //https://ubiq.co/database-blog/how-to-find-nth-row-in-mysql/
$result3=mysqli_query($connection, $query3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="StaffPageStyles.css">
    
</head>
<body>
    <div class="container">
        <div id="menu">
            <div id="nav"> 
                <img src="oldman.png" class="logo">
                <ul>
                    <li> <a style="text-decoration: none" href="services.php" >Login </a></li>
                    <li> <a style="text-decoration: none" href="services.php" >Sign up </a></li>
                </ul>
                <ul>
                    <li> <a  style="text-decoration: none" href="homepage.php" Home >Home</a></li>
                    <li>
                        About us
                        <ul>
                            <li> <a style="text-decoration: none" href="portfolio.php" >Portfolio </a> </li>
                            <li> <a style="text-decoration: none" href="our organization.php" >Our Organization </a></li>
                            <li> <a style="text-decoration: none" href="our cause.html" >Our Cause </a></li>
                        </ul>
                    </li>
                    <li> <a style="text-decoration: none" href="ServicePage.php" >Services </a></li>
                </ul>
            </div>
        </div>
        <H1 align="center">Staff Page</H1>
<main>
    <div id="Staff flavor" class="info-area">
        <h2>Meet Our Staff</h2>
     <table id="Staff Page Table" cellspacing="10">
        <tr>
         <td><h3>Caring, Experienced and Kind</h3></td>
     </tr>
        <tr>
          <td><p>Our staff have been hand picked from many applications only to offer the best service to your elder.
         <br>We ensure you that our staff are experienced in taking care of elderly. Not only that they are a kind and caring bunch of people.
         <br>They will make sure that your elder's needs are all met. They will be their friend, thier companion.
       </p></td>
     </tr>
     </table>
     </div>
     <table id="Squareinfoareatable" cellspacing="5">
  <tr>
    <td>
      <div id="Squareinfo-area" class="info-area">
      <img src="Caregiverodlmanbed.png" id="Staffimage">
      <?php
        if (mysqli_num_rows($result1) > 0) {
        while ($row = mysqli_fetch_array($result1)) {
         echo "Staff Name: " . $row['StaffFirstName'] . " " . $row['StaffLastName'] . "</br>";
         echo "Staff Email: " . $row['StaffEmail'] . "</br>";
         echo "Staff Experience: " . $row['StaffQualification'] . "</br>";
         }
        }else {
          echo "No records found";
        }


?>
      </div>
    </td>
    <td>
      <div id="Squareinfo-area2" class="info-area">
      <img src="Caregiveroldmanbed.png" id="Staffimage">
      <?php
        if (mysqli_num_rows($result2) > 0) {
        while ($row = mysqli_fetch_array($result2)) {
         echo "Staff Name: " . $row['StaffFirstName'] . " " . $row['StaffLastName'] . "</br>";
         echo "Staff Email: " . $row['StaffEmail'] . "</br>";
         echo "Staff Experience: " . $row['StaffQualification'] . "</br>";
         }
        }else {
          echo "No records found";
        }
?>
      </div>
    </td>
    <td>
      <div id="Squareinfo-area3" class="info-area">
      <img src="Caregiveroldmanwheelchaircentre.png" id="Staffimage">
      <?php
        if (mysqli_num_rows($result3) > 0) {
        while ($row = mysqli_fetch_array($result3)) {
         echo "Staff Name: " . $row['StaffFirstName'] . " " . $row['StaffLastName'] . "</br>";
         echo "Staff Email: " . $row['StaffEmail'] . "</br>";
         echo "Staff Experience: " . $row['StaffQualification'] . "</br>";
         }
        }else {
          echo "No records found";
        }
?>
      </div>
    </td>
  </tr>
</table>
    </main>
</body>
</html>