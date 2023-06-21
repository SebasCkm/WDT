<?php
    //database connection
    $host = 'localhost';
    $user = 'userdb';
    $password = '';
    $database = 'wdtassgm';
    $connection = mysqli_connect($host, $user, $password, $database);

    //step 2 - retrieve all user input from your form
    if (isset($_POST['btnsign'])) {
        $firstname = $_POST['FName'];
        $lastname = $_POST['LName'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone'];
        $password = $_POST['password'];
        $confirm_password = $_POST['CONpassword'];
        //step 3 - query
        $query = "INSERT INTO `userdb_assignment`(`First_name`, `Last_name`, `Email`, `Phone_number`, `Password`,Confirm_password) VALUES ('$firstname','$lastname','$email','$phone_number','$password','$confirm_password')";
        //step 4 - execute query
        if (mysqli_query($connection, $query)) {
            // go back to login pages if successful
            header("Location: loginPage.php");
        } else {
            echo "Sorry, please try again";
        }
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
        <input type="tel" id="Phone" name="phone" placeholder="0123456789" required>
    </div>
    <!-- password -->
    <div class="form-group">
        <label for="password">Password: </label>
        <input type="password" id="password" name="password" required>
    </div>
    <!-- enter again the password to confirm -->
    <div class="form-group">
        <label for="CONpassword">Confirm Password: </label>
        <input type="password" id="CONpassword" name="CONpassword" required>
    </div>
    <!-- Sign up button -->
    <div class="form-group">
        <button type="submit" name="btnsign">Sign Up</button>
        <button type="reset">Reset</button>
	</div>
	<!-- back to login page -->
	<div class="form-group">
	    <a href="loginPage.php" class="button">Back to Login</a>
	</div>
    </form>
    <script src="passwordVallidation.js"></script>
  </div>
</body>
</html>