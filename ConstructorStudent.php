<?php 

class Student{

    public $name;
    public $grade;


    //constructor
    function __construct($name, $grade)
    {
        $this->name = $name;
        $this->grade = $grade;
    }


    function printStudentInfo(){
        echo "$this->name graduated high school with $this->grade";
    }
}

$student = new Student('benedict', 3.96);
$student->printStudentInfo();



?>
