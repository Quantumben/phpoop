<?php 


//Destructor are magic function that run after all the script has been executed 
//unlike Constructor that runs that runs at the begining

class Message{


    //constructor
    function __construct()
    {
        echo "This is a new message <br><br>";
    }

    //create a destructor
    function __destruct()
    {
        echo "This message was deleted";
    }
}


$sms = new Message();

?>