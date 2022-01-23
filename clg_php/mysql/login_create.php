<?php

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username && $password){

            $host = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'loginapp';

            $connection = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
            
            if($connection){
                //echo "DB connection established \n ";

                //mysql injection 
                $username = mysqli_real_escape_string($connection,$username);
                $password = mysqli_real_escape_string($connection,$password);

                //password encryption
                $hashFormat = "$2y$10$";
                $salt = "iusesomecrazystrings22";
                $hashF_and_salt = $hashFormat . $salt;

                $password = crypt($password,$hashF_and_salt);
        
                $query = "INSERT INTO users (username,password) VALUES('$username','$password')";
                $result = mysqli_query($connection, $query);

                if($result){
                    echo "User successfully added.";
                }else{
                    die('User failed to add. '. mysqli_error($connection));
                }
            }
            else{
                die("Could not connect to database.");
            }
        }
        else{
            echo "Please enter your username and password.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>

<h1>Register User!</h1>

    <form action="login_create.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Add">
    </form>
    
</body>
</html>