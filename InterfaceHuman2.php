<?php 

interface Human{
    public function canSpeak();
    public function canWalk();
    public function canSmell();
}

interface HumanCharacteristics{
    public function hasHeight();
    public function hasWeight();
}

class Woman implements Human, HumanCharacteristics{  
    
    public function canSpeak()
    {
         echo "Hello ! i can talk";
    }

    public function canWalk()
    {
        echo "I can walk <br>";
    }

    public function canSmell()
    {
        echo "I can smell";
    }

    public function hasHeight()
    {
        echo "My height is 175cm";
    }

    public function hasWeight()
    {
        echo "My weight is 75kg";
    }
}

$woman1 = new Woman();

$woman1->canSmell();
$woman1->canSpeak();
$woman1->canWalk();


$woman1->hasHeight();
$woman1->hasWeight();
?>