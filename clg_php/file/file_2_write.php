<?php

$filename = "test.txt";

$handle = fopen($filename,'w');

if($handle){
    echo 'File opened successfully';
    fwrite($handle,"I love PHP Prog Language\n");
    fwrite($handle,'This is a scripting Language');
}
else{
    echo 'File not found';
}

fclose($handle);

?>