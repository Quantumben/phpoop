<?php 

//Static function has what we called "self" which is similar to "this"

class Name{
    static public $name;

    static public function echoMyName($my_name){
        self::$name = $my_name;
    }
}



Name::echoMyName('benedict');
echo Name::$name;


?>