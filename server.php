<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action  = "<?php $_SERVER["PHP_SELF"]?>" method = "post">
        <label> Username: </label><br>
        <input type = "text" name = "username"><br>
        <label> Password: </label><br>
        <input type = "text" name = "password"><br>
        <input type = "submit" name = "login" value = "Log In">
    </form>
    
</body>
</html>

<?php

 foreach($_SERVER as $key => $value){
    echo "{$key} = {$value} <br>";
 }


?>