<?php 

class Table{

    public $color;
    public $weight;

    public function open(){
        echo "I can open the door";

    }

    private function close(){
        echo "I can close this door";

    }


}

$myTable = new Table();
$myTable->open();

//close method can't be access cos it's set to private which doesn't allow to 
//To be called outside a class

//$myTable->close();


?>