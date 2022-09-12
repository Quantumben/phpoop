<?php 
declare(strict_types=1);

class Movie{
    private $actors;

    function setActorsName(array $actors) : void {
        $this->actors = $actors;
    }

    function getActorsName() : string {
        echo "The names of actors are: <br>";
        foreach($this->actors as $actor){
            echo $actor. "<br>";
        }
    }
}

$movie1 = new Movie();
$movie1->setActorsName(['John', 'mary', 'land', 'promise']);
$movie1->getActorsName();

?>