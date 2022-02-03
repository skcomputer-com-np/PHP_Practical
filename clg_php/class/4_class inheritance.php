
<?php

class Rect{

    var $length = 10;
    var $bredth = 20;

    function Area(){
        echo 'Area: ' . ($this->length * $this->bredth) . '<br>';
    }

}


class Square extends Rect{
    var $length = 11;

}

$s1 = new Square();
$s1->area(); //2200

$s1->length = 500;
$s1->bredth = 600;
$s1->area();





?>