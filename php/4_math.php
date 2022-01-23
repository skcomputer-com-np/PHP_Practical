<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="">
    <input type="text" name="value">
    <input type="submit">
</form>



    <?php

        $title = "First Prog";    
        $number1 = 10;
        $number2 = 20;

        echo "Number1= " . $number1 . "<br>";
        echo "Number2= " . $number2;
        echo "<br>";
        echo '<h1 style="display: inline;">ADD: '.($number1 + $number2)."</h1>";
        
        if($_POST['value'])
            echo "<br>". $_POST['value'];
        
    ?>

    
</body>
</html>