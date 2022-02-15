
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
$s2 = new Student();

//before value of age change
$s1->getStudDetails();
$s2->getStudDetails();

Student::$age = 50;

//after value of age change
$s1->getStudDetails();
$s2->getStudDetails();

//accessing static variable
echo Student::$age;

?>