<?php

$filename = "test.txt";

$handle = fopen($filename,'r');

if($handle){       
    
    //1st method: read only specified no of characters
    //each bit is equal to 1 characters
    //$line  = fread($handle,10);

    //2nd method: read all line file;
    // $line  = fread($handle,filesize($filename));    
    // echo $line;

    //3rd method: read sinlge line from File
    // echo fgets($handle);
    // echo fgets($handle);

    //read single characters
    //echo fgetc($handle);    

    //4th method
    while(!feof($handle))
    {
         echo fgets($handle);
    }
}
else{
    echo 'File not found';
}

fclose($handle);

?>