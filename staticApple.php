<?php 

class Apple{
    static public $color = 'RED';

    static public function hasTaste(){
        echo "Apples have great taste";
    }
}


echo Apple::$color;
Apple::hasTaste();

?>