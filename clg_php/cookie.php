<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name = "SomeName";
        $value = "Kajal";
        $expireDate = time() + (60 * 60 * 24 * 7);

        setcookie($name, $value);

        if (isset($_COOKIE['SomeName'])){
            echo $_COOKIE['SomeName'];
        }
        else 
        {
            echo 'cookies not found';
        }
    ?>
</body>
</html>
