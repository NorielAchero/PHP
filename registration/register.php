
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <center>
    <h1> Registration </h1>
        <hr>
        <form action = "register.php" method = "post">
        <h3> Fill out the form: </h3>
        <label>Username: </label>
        <input type = "text" value = "" name = "username"> <br> <br>
        <label>Password: </label>
        <input type = "password" value = "" name = "password"><br> <br>
        <label>Firstname: </label>
        <input type = "text" value = "" name = "firstname"><br> <br>
        <label>Lastname: </label>
        <input type = "text" value = "" name = "lastname"><br> <br>
        <input type = "submit" name = "register" value = "Register">
        <form>
    </center>
</body>
</html>

<?php
    include("sqlconnection.php");
    if(isset($_POST['register'])){
        if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['firstname']) || empty($_POST['lastname'])){
            echo "You need to complete everything. ";
        }
        else{

            $username = $_POST['username'];
            $password = $_POST['password'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];


            $sql = "INSERT INTO users (username, password, firstname, lastname)
                    VALUES ('$username', '$password', '$firstname', '$lastname')";
            
            mysqli_query($conn, $sql);

            header("Location: index.php");
        }
    }
    




?>