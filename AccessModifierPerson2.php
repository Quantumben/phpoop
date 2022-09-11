<?php 

class Person2{

    //Private access modifier 
//The property or method can be access within the class 
//so once it's defined as private no body can change it or access it from
//outside. so in that case if we try to change it we will get an error
    private $name;
    private $age;



//if we do not mention any access modifier in front of a function
//then it means it's of type public

    public function setInfo(){
        return "My name is ".$this->name. "and i am ". $this->age . "Years old.";
    
    }

    function getInfo(){
        echo $this->getInfo();
    }
}



$name = new Person2();

//we can access the properties outside the class
$name->name = 'Hanna';
$name->age = 21;

echo $name->getInfo();

?>