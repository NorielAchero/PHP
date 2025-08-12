
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <center>
    <h1> Log In </h1>
        <hr>
        <form action = "login.php" method = "post">
        <h3> Log In: </h3>
        <label>Username: </label>
        <input type = "text" value = "" name = "username"> <br> <br>
        <label>Password: </label>
        <input type = "password" value = "" name = "password"><br> <br>
        <input type = "submit" name = "login" value = "Log In">
        <form>
    </center>
</body>
</html>

<?php
    include("sqlconnection.php");
    session_start();

    if(isset($_POST['login'])){
        if(empty($_POST['username']) || empty($_POST['password'])){
            echo "You need to complete everything. ";
        }
        else{

            $username = $_POST['username'];
            $password = $_POST['password'];



            $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
            $stmt->bind_param("ss", $username, $password);
            
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
            // Credentials correct → redirect
            $_SESSION['username'] = $username;
            header("Location: home.php");
            exit();
            } else {
                echo "Invalid username or password.";
            }



        }
    }






?>