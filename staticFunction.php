<?php 

class Truck{
    static $brand= 'volvo';

    static function accelerate(){
        echo "Now i am increasing speed";
    }
}


// $truck1 = new Truck();
// echo $truck1->brand;
// echo '<br><br>';
// $truck1->accelerate();


//static when apply to a class, we don't need to initiate the method or properties before using them

echo Truck::$brand;
echo "<br><br>";
Truck::accelerate();


?>