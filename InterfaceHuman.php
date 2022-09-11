<?php 

interface Human{
    public function canSpeak();
    public function canWalk();
    public function canSmell();
}

class Woman implements Human{  
    
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
}

$woman1 = new Woman();

$woman1->canSmell();
$woman1->canSpeak();
$woman1->canWalk();

?>