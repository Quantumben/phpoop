<?php
//How to access methods inside the class with $this keyword

class Dog{

    //method
    function makeSound(){
        return 'Woof Woof';
    }

    function echoSound(){
        echo $this->makeSound();
    }
}

$dog1 = new Dog();
$dog1->echoSound();




?>