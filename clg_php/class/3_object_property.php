
<?php

class Rect{

    var $length = 10;
    var $bredth = 20;

    function Area(){
        echo 'Area: ' . ($this->length * $this->bredth) . '<br>';
    }

}

$r1 = new Rect();
$r1->area();

$r1->length = 500;
$r1->bredth = 600;
$r1->area();

?>