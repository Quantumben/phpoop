<?php 

class Animal2{
//protected access modifiers - the property or method can be accessed
//Within the class and by classes derived from that class
    protected $name = 'Sparky';

}

class Dog extends Animal2{

    public function getAnimalName(){
        return "The dog's name is $this->name";
    }
}

$dog1 = new Dog();

echo $dog1->getAnimalName();


?>