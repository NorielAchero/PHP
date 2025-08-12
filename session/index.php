<?php

    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the login page <br>
    <a href= "home.php"> Home </a>
</body>
</html>
<?php

    $_SESSION["username"] = "orenji";
    $_SESSION["password"] = "12345";

    echo "<br>" . $_SESSION['username'] ."<br> " .  $_SESSION['password'];

?>
