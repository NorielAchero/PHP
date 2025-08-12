<?php
// 1. MySQLi Extension
// 2. PDO (PHP Data Objects)

include("database.php"); 


$sql = "INSERT INTO users (user, password) 
        VALUES ('noriel', 'asdasd')";


    mysqli_query($conn, $sql);
    echo "User registered";

    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hello  <br>
</body>
</html>