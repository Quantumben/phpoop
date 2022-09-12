<?php 

abstract class Television {
    public $brand;

    public function __construct($brand)
    {
        $this->brand = $brand;
    }

abstract public function showInches($inches);

   
}

class Samsung extends Television{

    public function showInches($inches)
    {
        echo "This $this->brand Tv is $inches inches.";
    }

}


$samsung1 = new Samsung('Samsung');
$samsung1->showInches(45);
?>