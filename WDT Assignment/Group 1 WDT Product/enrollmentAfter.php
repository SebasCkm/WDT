<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="enrollmentStyle.css">
</head>
<body>
    <div class ="container">
    <img src="images/oldman.png" alt="logo" class="logo">
        <h2>Thank you for Enrolling.</h2>
        <p>Thank you for Enrolling with us, <?php echo $_SESSION['fullname']?>, we will contact you through email after we have apprroved of your enrollment.<br>
            Thank you for choosing us. We hope to see you and offer you our services.</p>
            <a href="Rhomepage.php" class="btnhome">Back to Home</a>
    </div>
</body>
</html>