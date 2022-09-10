<?php 

class Person{
    
    //property
    public $name ='Benedict Goodluck';

//$this help us to refer to an object inside a class

    //method
    function printName(){
        echo "My name is $this->name";

    }

}


//create an object or instance
$person = new Person();
$person->printName();

?>