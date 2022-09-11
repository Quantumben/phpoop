<?php 


class Animal4{

    public $name = 'Sparky';

    public function getName(){
        return "The animal's name is $this->name";
    }
}

class Dog extends Animal4{

    
}

$dog1 = new Dog();
echo $dog1->getName();



?>