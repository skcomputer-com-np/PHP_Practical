<?php

    include 'db.php';
    
    $query = "SELECt * FROM users";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die('User failed to add. '. mysqli_error($connection));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of users</title>
</head>
<body>

<h1>Registered Users</h1>

<!--  Using row-->
<?php
    // while ($user = mysqli_fetch_row($result))
    // {
    //     print_r($user);
    // }
?>

<!-- associative array -->
<?php
    // while ($user = mysqli_fetch_assoc($result))
    // {
    //     print_r($user);
    // }
?>

<!-- pre tag -->
<?php
        while ($user = mysqli_fetch_assoc($result))
        {
?>
    <pre>

<?php
          //  echo ($user['id']. ' ' . $user['username'] . ' ' . $user['password']);
          print_r($user);
?>
    </pre>
<?php
        }
?>

</body>
</html>