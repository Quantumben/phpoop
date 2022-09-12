<?php 
//this is a method of securing of data using private access modifier

class Message{
    private $message;

    public function setMessage($sms){
        $this->message = $sms;
    }

    public function getMessage(){
        echo "The message i recieved says: $this->message";
    }
}


$sms1 = new Message();
$sms1->setMessage('Hello Dear');
$sms1->getMessage();


?>