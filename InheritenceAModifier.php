<?php 
//Animal is called parent class or super class or base class

class Animal{
    public $name;
    public $weight;


    function sleep(){
        echo "I'm sleeping now<br><br>";
    }


}


//Dog class is called child class or subclass or derived class

class Dog extends Animal{

    public function weight(){
        echo "$this->name weighs $this->weight kg";
    }
}


// $animal = new Animal();
// echo $animal->name = 'sparky';
// $animal->sleep()

$dog1 = new Dog();
echo $dog1->name = 'Sparky';
echo $dog1->weight = 7;


//sub class can have access to the parent class method 
$dog1->sleep();

//As well as it own method
$dog1->weight();
 

?>