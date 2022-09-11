<?php

class School{

    public $schoolName;
    public $schoolStep;


    function __construct($schoolName, $schoolStep)
    {
        $this->schoolName = $schoolName;
        $this->schoolStep = $schoolStep;
    }

    function showSchoolInfo(){
        echo "$this->schoolName <br>";
        echo "$this->schoolStep";
    }
}

class Student extends School{

    public $studentName;
    public $studentAge;

    function __construct($studentName, $schoolAge, $school)
    {
        $this->schoolName = $studentName;
        $this->studentAge = $schoolAge;

        $this->schoolName = $school->schoolName;
        $this->schoolStep = $school->schoolStep;
    }

    function showStudentInfo(){
        echo "$this->studentName <br>";
        echo "$this->studentAge <br>";

        echo "$this->schoolName <br>";
        echo "$this->schoolStep <br>";
    }

}

$myschool = new School('PESS', 'Secondary');

$student = new Student('Benedict', 12, $myschool);

$student->showStudentInfo();


?> 