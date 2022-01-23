<?php

    include 'db.php';
    $query = "SELECt * FROM users";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die('User failed to add. '. mysqli_error($connection));
    }

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        //mysql injection 
        $username = mysqli_real_escape_string($connection,$username);
        $password = mysqli_real_escape_string($connection,$password);

        $query = "UPDATE users SET username='$username', password='$password' where id=$id";

        $res = mysqli_query($connection, $query);
        
        if($res){
            echo "<br>User ID: " . $id;
            echo "<br>Successfully updated";
        }else{
            echo "<br>Query failed to execute." . mysqli_error($connection);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>

    <h1>Update Users</h1>

    <form action="login_update.php" method="post">

        <input type="text" name="username" placeholder="Username"> <br> <br>
        <input type="password" name="password" placeholder="Password"> <br> <br>

        <select name="id">

            <?php
                while($user = mysqli_fetch_assoc($result)){
                    $id = $user['id'];
                    echo "<option value='$id'>$id</option>";
                }
            ?>
            
        </select>
        <br> <br>
        <input type="submit" name="update" value="Update">
    </form>    
</body>
</html>