
<?php

class P{

    function printName()
    {
         echo  'Base Class <br>';
    }
}

class C extends P{
    function printName()
    {
         echo  'Child Class <br>';
    }
}

$p = new P();
$p->printName();

$c = new C();
$c->printName();


?>