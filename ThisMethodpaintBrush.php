<?php 
//How to access methods inside the class with $this keyword

class PaintBrush{

    //method
    function hasColor(){
        return 'This paint brush has a red color';
    }

    function showColor(){
        echo $this->hasColor();
    }
}

$paint = new PaintBrush();
$paint->showColor();


?>