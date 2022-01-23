<?php

    include 'db.php';
    $query = "SELECt * FROM users";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die('User failed to add. '. mysqli_error($connection));
    }

    if(isset($_POST['delete']))
    {
        $id = $_POST['id'];

        $query = "delete from users where id=$id";

        $resultt = mysqli_query($connection, $query);
        
        if($resultt){
            echo "<br>User ID: " . $id;
            echo "<br>Successfully deleted";
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
    <title>Delete</title>
</head>
<body>

    <h1>Delete Users</h1>

    <form action="login_delete.php" method="post">
        <select name="id">
            <option>Select Id</option>
            <?php
                while($user = mysqli_fetch_assoc($result)){
                    $id = $user['id'];
                    echo "<option value='$id'>$id</option>";
                }
            ?>
            
        </select>
        <br> <br>
        <input type="submit" name="delete" value="Delete">
    </form>    
</body>
</html>