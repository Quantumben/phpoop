<?php 
//Getters and Setters

class Teacher{
    //property
    public $name = '';
    
    //set method or setter
    function setName($teacher_name){
        $this->name = $teacher_name;
    }

    //get method or getter
    function getName(){
        echo "My teacher's name is: ".$this->name;
    }
}


$myTeacher = new Teacher();
$myTeacher->setName('Benedict');
$myTeacher->getName();

?>