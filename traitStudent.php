<?php 
trait University{
    function showUniversityGrade(){
        echo "Your university grades are not very well <br><br>";
    }
}

trait School{
    function showSchoolGrade(){
        echo "Your school grade are very good! <br>";
    }
}

class Student{
    use University;
    use School;

    function getAllGrades(){
        $this->showSchoolGrade();
        $this->showUniversityGrade();
    }
}


$student1 = new Student();
$student1->getAllGrades();
?>