<?php 
class Person3{
    private $name;


    //A setter sets a new value for the private property
    public function setName($name){
        $this->name = $name;
    }

    //A getter returns the vvalue of the private property
    public function getName(){
        return $this->name; 
    }
}

$mary  = new Person3();
$mary->setName('Mary');
$mary->getName();

//to access private propery we use the public method in the class to set the 
//Name and use another method to get the output


?>