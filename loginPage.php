<?php
    session_start();
    //database connection
    $host = 'localhost';
    $user = 'userdb';
    $password = '';
    $database = 'wdtassgm';

    $connection = mysqli_connect($host, $user, $password, $database);
    
    if (isset($_POST["btnlog"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $query = "SELECT * FROM userdb_assignment WHERE Email = '$email' AND Password = '$password'";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result); //later we will use this info $row['id']
        $count = mysqli_num_rows($result); //return 1 or 0
        if ($count == 1) {
            echo 'login successful';
            $_SESSION['uid'] = $row['User_ID'];
            $_SESSION['email'] = $row['Email'];
            $_SESSION['fullname'] = $row['First_name']. ' ' . $row['Last_name'];        
            header("Location: Rhomepage.php"); //redirect the user to index.php
        } else {
            echo 'record not found, try again';
        }
    }
    if (isset($_POST["btnlog"])) {
        if ($email === "admin123@gmail.com" && $password === "admin123") {
            // will go to admin page if successful login
            header("Location: \\admin page name\\"); # admin page
        }
            // just to check is it occur any error
        // else {
        //     echo 'Admin Email or Password incorrect, please enter again';
        // }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- connect to css file -->
	<link rel="stylesheet" href="StyleLogandSign.css">
</head>
<body>
  <!-- to enter the login information -->
  <div class="container">
      <h1>Login</h1>
      <form name="login_page" action="" method="POST">
        <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" id="email" name="email" placeholder="email@gmail.com" required>
        </div>
        <div class="form-group">
            <label for="password">Password: </label>
            <input type="password" id="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" name="btnlog">Log in</button>
      <!-- go to Sign up page -->
      <div>
        <br>
        <a href="SignupPage.php" class="button">Signup</a>
      </div>
      </form>
  </div>
</body>
</html>
