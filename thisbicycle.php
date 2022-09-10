<?php
//How to access properties inside the class with $this keyword

class Bicycle{

    //properties
    public $type = 'Mountain';
    public $color = 'green';

    //method
    function giveBicyleDetails(){
        echo "This $this->type bicycle has a $this->color color.";
    }
}

//create an object/ instance of the class
$bicyle1 = new Bicycle();
$bicyle1->giveBicyleDetails();
?>