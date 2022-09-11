<?php 
//When chaining always start chaining from the top 
//to the buttom


class Cleaner{

    public $name;

    function wipeTheFloor(){

        echo "Please first wipe the floor";

        $this->name = "Alex";
        return $this;
    }

    function mopTheFloor(){

        echo " and then mop it " .$this->name. "!";
    }
}

$cleaner1 = new Cleaner();
$cleaner1->wipeTheFloor()->mopTheFloor();

?>