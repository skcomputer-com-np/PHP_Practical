<?php
$filename = 'test.txt';

if(file_exists($filename))
{
    unlink($filename);
    echo $filename. ' file deleted successfully.';
}else{
    echo "File not found.";
}

?>