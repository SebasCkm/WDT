<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Page</title>
    <link rel="stylesheet" href="StyleLogandSign.css">
	<style>
	.button {
    display: inline-block;
    padding: 10px 10px;
    background-color: white;
    color: lightslategray;
    text-decoration: none;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
  }
  
  .button:hover {
    background-color: #ddd;
  }
  	</style>
</head>
<body>
<div class="container">
    <h2>Sign Up</h2>
    <form action="/" method="GET">
      <div class="form-group">
        <label for="username">Username: </label>
        <input type="text" id="username" name="username" placeholder="UserName" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone Number: </label>
        <input type="tel" id="Phone" name="phone" pattern="[0-9]{10}" placeholder="0123456789" required>
      </div>
      <div class="form-group">
        <label for="password">Password: </label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="password">Confirm Password: </label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <button type="submit">Sign Up</button>
        <button type="reset">Reset</button>
	 </div>
	 <div class="form-group">
		<!-- Button to go back to the login page -->
		<a href="loginPage.php" class="button">Back to Login</a>
	 </div>
    </form>
  </div>
</body>
</html>
