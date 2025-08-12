<?php
// 1. MySQLi Extension
// 2. PDO (PHP Data Objects)

include("database.php"); 

// Insertion
// $sql = "INSERT INTO users (user, password) 
//         VALUES ('noriel', 'asdasd')";


//     mysqli_query($conn, $sql);
//     echo "User registered";

// Retrieve
    $sql = "SELECT * FROM users";
    $table = mysqli_query($conn, $sql);

    if(mysqli_num_rows($table) > 0 ){
        while($row = mysqli_fetch_assoc($table)){
            echo $row["id"] . " ";
            echo $row["user"] . " ";
            echo $row["password"] . " ";
            echo "<br>";
        }

    }
    else{
        echo "Not found";
    }


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

</body>
</html>