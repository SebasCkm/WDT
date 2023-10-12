<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <script>
        alert("You have been logged out.");
        window.location.href = "homepage.php";
    </script>
</head>
<body>
</body>
</html>