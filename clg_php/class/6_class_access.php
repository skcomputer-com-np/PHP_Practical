
<?php

class Student{

    public $fName = 'Kajal';
    protected $lName = 'Mahato';
    private $age = 20; 

    function getStudDetails()
    {
         echo  'Full Name: ' . $this->fName . ' ' . $this->lName . '<br>';
         echo 'Age: ' . $this->age;
    }
}

$s1 = new Student();
$s1->getStudDetails();

?>