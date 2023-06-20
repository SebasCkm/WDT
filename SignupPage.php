<?php
    //database connection
    $host = 'localhost';
    $user = 'userdb';
    $password = '';
    $database = 'wdtassgm';

    // $connection = mysqli_connect('localhost', 'root','','wdt2111');
    $connection = mysqli_connect($host, $user, $password, $database);

    //check connection between database
    if (!$connection) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Page</title>
    <link rel="stylesheet" href="StyleLogandSign.css">
</head>
<body>
<div class="container">
    <h2>Sign Up</h2>
    <!-- sign up -->
    <form action="" method="POST">
    <!-- First Name -->
    <div class="form-group">
        <label for="FName">First Name: </label>
        <input type="text" id="FName" name="FName" placeholder="First Name" required>
    </div>
    <!-- Last Name -->
    <div class="form-group">
        <label for="LName">Last Name: </label>
        <input type="text" id="LName" name="LName" placeholder="Last Name" required>
    </div>
    <!-- email -->
    <div class="form-group">
        <label for="email">E-mail: </label>
        <input type="email" id="email" name="email" placeholder="email@gmail.com" required>
    </div>
    <!-- phone number -->
    <div class="form-group">
        <label for="phone">Phone Number: </label>
        <input type="tel" id="Phone" name="phone" pattern="[0-9]{10}" placeholder="0123456789" required>
    </div>
    <!-- password -->
    <div class="form-group">
        <label for="password">Password: </label>
        <input type="password" id="password" name="password" required>
    </div>
    <!-- enter again the password to confirm -->
    <div class="form-group">
        <label for="password">Confirm Password: </label>
        <input type="password" id="password" name="password" required>
    </div>
    <!-- Sign up button -->
    <div class="form-group">
        <button type="submit">Sign Up</button>
        <button type="reset">Reset</button>
	</div>
	<!-- back to login page -->
	<div class="form-group">
	    <a href="loginPage.php" class="button">Back to Login</a>
	</div>
    </form>
  </div>
</body>
</html>