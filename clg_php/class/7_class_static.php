
<?php

use Student as GlobalStudent;

class Student{

    static $age = 20; 

    function getStudDetails()
    {
         echo 'Age: ' . Student::$age . ' years <br/>';
    }
}

$s1 = new Student();
$s1->getStudDetails();

//accessing static variable
echo Student::$age;

?>