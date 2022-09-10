<?php
//Construct runs by itself , that's it is been initiated by PHP automatically

class Person{

    public $name;
    public $age;
    public $height;
    
    function __construct()
    {
        $this->name = 'Benedict';
        $this->age = 32;
        $this->height = 100;
    }

    function describePerson(){
        echo "$this->name is $this->age years old and he is $this->height cm tail!";
    }
}


$person1 = new Person();

$person1->describePerson();

?>