<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getpost</title>
</head>
<body>

    <!-- <form action = "getpost.php" method = "post">
        <label>Username: </label><br>
            <input type = "text" name = "username"></input> <br>
        <label>Password: </label><br>
            <input type = "password" name = "password"></input> <br>    
        <input type = "submit" value = "Log in"> </input>
    </form> -->

    <form action = "getpost.php" method = "post">
        <label> Quantity: </label><br>
        <input type = "text" name = "quantity">
        <input type = "submit" value = "Total">

    </form>


</body>
</html>
<?php

// echo $_POST["username"]. "<br>";
// echo $_POST["password"]. "<br>";

    $item = "Pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total =  $quantity * $price;

    echo "You have order a number of {$quantity} of {$item} <br>";
    echo "With a total of {$total}"


?>