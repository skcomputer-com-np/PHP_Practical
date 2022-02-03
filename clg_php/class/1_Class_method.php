<?php

class Rect{

    function Area(){
        echo 'This is area of the rectangle <br>';
    }

}

//check class is exists or not found
if(class_exists('Rect')){
    echo 'The Rectangle class is available <br>';
}
else{
    echo 'The Rectangle class is not available <br>';
}

//check method is exists or not found
if(method_exists('Rect', 'Area')){
    echo 'Area method is available <br>';
}
else{
    echo 'Area method is not available <br>';
}


?>