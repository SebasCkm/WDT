<?php
    session_start();
    include 'dbConn.php';

    if (isset($_POST["btnlog"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $query = "SELECT * FROM tblcustomer WHERE CEmail = '$email' AND CPassword = '$password'";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result); //later we will use this info $row['id']
        $count = mysqli_num_rows($result); //return 1 or 0
        if ($count == 1) {
            echo 'Login successful';
            $_SESSION['Cid'] = $row['CustomerID'];
            $_SESSION['email'] = $row['CEmail'];
            $_SESSION['fullname'] = $row['CFName']. ' ' . $row['CLName'];        
            header("Location: Rhomepage.php"); //redirect the user to index.php
        } else {
            echo 'Record not found, try again';
        }
    }
    if (isset($_POST["btnlog"])) {
        if ($email === "admin123@gmail.com" && $password === "admin123") {
            // will go to admin page if successful login
            header("Location:AdminPage.php"); # admin page
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
            <!-- logo -->
            <div>
        <img src="images/oldman.png" alt="logo" class="logo">
      </div>
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
        <a href="homepage.php" class="btnhome">Back to Home</a>
      </div>
      </form>
  </div>
</body>
</html>