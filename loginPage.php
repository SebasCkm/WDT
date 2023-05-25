<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
	<link rel="stylesheet" href="StyleLogandSign.css">
	<style>
	.button {
    display: inline-block;
    padding: 10px 20px;
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
    <h1>Login</h1>
    <form>
      <input type="text" placeholder="Username">
      <input type="password" placeholder="Password">
      <button type="submit">Log in</button>
	<a href="SignupPage.php" class="button">Signup</a>
    </form>
</div>
</body>
</html>
