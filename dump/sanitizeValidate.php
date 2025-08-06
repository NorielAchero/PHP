<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "sanitizeValidate.php" method = "post">
        Username: <br>
        <input type = "text" name = "username"> <br>
        Age: <br>
        <input type = "text" name = "age"> <br>
        Email: <br>
        <input type = "text" name = "email"> <br>
        <input type = "submit" name = "login" value = "login">
    </form>
</body>
</html>

<?php

    if(isset($_POST["login"])){
        // $username = filter_input(INPUT_POST, "username", 
        //                     FILTER_SANITIZE_SPECIAL_CHARS);
        // $age = filter_input(INPUT_POST, "age", 
        //                     FILTER_SANITIZE_NUMBER_INT);
        // $email = filter_input(INPUT_POST, "email", 
        //                     FILTER_SANITIZE_EMAIL);
        
        $username = filter_input(INPUT_POST, "username", 
                            FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, "age", 
                            FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email", 
                            FILTER_VALIDATE_EMAIL);

        if(empty($age)){
            echo "Age is invalid";
        }
        elseif(empty($email)){
            echo "Email is invalid";
        }
        else{
            echo "Hello " . $username . ". Your age is " . $age . ". Email is " . $email;
        }
        

        

    }

?>


