<?php

$filename = "test.txt";

$handle = fopen($filename,'w');

if($handle){
    echo 'File opened successfully';
}
else{
    echo 'File not found';
}

fclose($handle);

?>