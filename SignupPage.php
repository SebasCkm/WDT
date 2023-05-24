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
    </form>
  </div>
</body>
</html>