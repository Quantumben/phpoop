<?php 

class Fullname{

    static public $fullname;

    static public function sayMyName($myFirstname, $myLastname){
        self::$fullname = 'My fullname is '.$myFirstname . '' .$myLastname; 
    }

}

Fullname::sayMyName('Benedict', 'Goodluck');
echo Fullname::$fullname;

?>