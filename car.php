<?php 

//create a class
class Car{

//define the variable
public $brand = 'Red';
public $type;
public $color;
public $number_of_wheels;
public $number_of_doors;


//define the method
function startEngine(){
    echo 'this can now start moving';
}


}


//create an object of the Car class or an instance of the car class

$car1  = new Car();

//access the property
echo $car1->color;

//access the method
$car1->startEngine();

?>