<?php 

//When final keyword is used before a class. it means we can't extend the class

final class Block{
    public $address = '42 smith avenue';

}


class Appartment extends Block{

}


$myAppart = new Appartment();
echo $myAppart->address;

?>