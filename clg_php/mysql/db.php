<?php
 $host = 'localhost';
 $dbUsername = 'root';
 $dbPassword = '';
 $dbName = 'loginapp';

 $connection = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
 
 if($connection){
     //echo "DB connection established: ";
 }
 else{
     die("Could not connect to database");
 }

?>
