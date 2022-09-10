<?php 
class Person{


    function screanMyName($name, $age){
        echo "My name is $name and i am $age years old";
    }
}

$george = new Person();
$george->screanMyName('BENEDICT', 25);

?>