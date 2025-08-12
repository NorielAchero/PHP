<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <center>

    <?php

    session_start();

    echo "<center>
    
        <h1>Welcome, {$_SESSION['username']}</h1>
    
        </center>
    ";
    ?>

    <form action = "index.php" method = "post">
    <input type = "submit" value = "Logout" name = "logout">
    </form>

</center>
    
</body>
</html>
<?php

    if(isset($_POST["logout"])){
        session_destroy();
    }



?>