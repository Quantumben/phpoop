<?php 

interface Student{
    public function learnTheLesson();
}

class StudentA implements Student{

    function learnTheLesson()
    {
        echo "i learn the lesson by writing it down";
    }
}

class StudentB implements Student{

    function learnTheLesson()
    {
        echo "i learn the lesson when i listen to it";
    }
}

class StudentC implements Student{

    function learnTheLesson()
    {
        echo "i learn the lesson when i just read it";
    }
}

?>