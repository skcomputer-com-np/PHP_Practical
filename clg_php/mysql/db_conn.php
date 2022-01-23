<?php

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username && $password){
            //echo $username;
            //echo $password;

            $host = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'loginapp';

            $connection = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
            
            if($connection){
                echo "DB connection established: ";
            }
            else{
                die("Could not connect to database");
            }
        }
        else{
            echo "Please enter your username and password";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Login Page!</h1>

    <form action="db_conn.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Login">
    </form>
    
</body>
</html>