<?php 
//a class is called abstract when it has atleast 1 abstract method
//in Abstract class is a class that we only want to use it method but we can't create an object from it



abstract class Human{

    abstract public function canTalk();
    public function canWalk(){
        echo "I can work <br>";
    }

    public function canEat(){
        echo "I can eat <br>"; 
    }
}

class Man extends Human{
    public function canTalk()
    {
        echo "I can talk";
    }


}

//We cannot create an instance of an abstract class
//$Human1 = new Human();


//instance of man
$man1 = new Man();
$man1->canTalk();
$man1->canWalk();
$man1->canEat();

?>