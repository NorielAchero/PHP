<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action  = "isset_empty.php" method = "post">
        <label> Username: </label><br>
        <input type = "text" name = "username"><br>
        <label> Password: </label><br>
        <input type = "text" name = "password"><br>
        <input type = "submit" name = "login" value = "Log In">
    </form>
    
</body>
</html>


<?php

    // isset() = Returns TRUE if a variable is declared and not null
    // empty() = Returns TRUE if a variable is not declared, false, null, ""

    // $username = 123;
    // $asdasd = null;

    // echo isset($username) . "<br>";
    // echo empty($asdasd);
    // // echo empty($username);

    foreach($_POST as $key => $value){
        echo "{$key} = {$value} <br>";
    }

    if(isset($_POST["login"])){
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username) && empty($password)){
            echo "Username and Password is missing";
        }
        elseif(empty($username)){
            echo "Username is missing";
        }
        elseif(empty($password)){
            echo "Password is missing";
        }
        else{
            echo "Nice Log In";
        }

    }



?>