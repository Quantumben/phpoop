<?php 
//Combination of how to access properties and methods
// inside the class with $this keyword

class Student {

    //property
    public $name = 'Benedict Goodluck';


    //methods
    function getName(){

        return $this->name;
    }

    function presentStudent(){

        echo $this->getName() . " is the best student in the school";
    }
}

//create object
$student = new Student();

$student->presentStudent();


?>