<?php 

abstract class Airplane{
    //abstract classes can have properties too. while interface cannot

    public $numberOfWings = 4;

    abstract public function canFly();

    public function canTakeOff(){
        echo "All airplane can take off <br>";
    }

    public function canLand(){
        echo "All airplane can land <br>";
    }
}

class FighterPlane extends Airplane {
    public function canFly()
    {
        echo "Fighter plane are really fast";
    }


}


$fighter = new FighterPlane();
echo $fighter->numberOfWings;
echo "<br>";

$fighter->canFly();
$fighter->canTakeOff();
$fighter->canLand();


?>