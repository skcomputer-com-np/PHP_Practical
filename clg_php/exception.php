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

    function valid_diviison($x, $y){
        if($y == 0){
            throw new Exception('Not valid division');
        }
        else{
            echo $x/$y;
        }
    }
        try {
            valid_diviison(20 , 5);            
        } catch (Exception $e) {
            echo "Error <br>" . $e->getMessage();
        }
    ?>
</body>
</html>