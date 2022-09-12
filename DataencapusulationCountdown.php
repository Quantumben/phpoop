<?php 

class Countdown{
    private $maxDuration = 10;

    public function startCountdownFromTenTo($time){
        for($duaration = 10; $duaration > $time; $duaration-- ){
            sleep(1);
            $this->maxDuration = $this->maxDuration - 1;
            echo $this->maxDuration . "<br>"; 
        }
    }
}


$timer1 = new Countdown();
$timer1->startCountdownFromTenTo(9);


?>