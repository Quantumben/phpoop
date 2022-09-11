<?php 


/*
Access modifiers help to restrict the access of properties and methods

There are 3 types of access modifiers:

public - the property or method can be accessed from everywhere. From both inside and outside the class.

private - the property or method can ONLY be accessed within the class. So once it is defined as private nobody can change it or access it from outside

protected - the property or method can be accessed within the class and by classes derived from that class. (We will talk more about it in the next section where we will learn about inheritance)
//Protected & private methods can't be accessed outside an extend or subclass
*/
class Person1{

    //Public access modifier
    //The property or method can be accessed from anywhere
    //From both inside and outside the class


    //the following "Public" is called access modifier
    public $name;
    public $age;



//if we do not mention any access modifier in front of a function
//then it means it's of type public

    public function setInfo(){
        return "My name is ".$this->name. "and i am ". $this->age . "Years old.";
    
    }

    function getInfo(){
        echo $this->getInfo();
    }
}



$name = new Person1();

//we can access the properties outside the class
$name->name = 'Hanna';
$name->age = 21;

echo $name->getInfo();

?>