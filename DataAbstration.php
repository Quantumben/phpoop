<?php

use Name as GlobalName;

abstract class Name{
    abstract protected function sayMyName($name);
}


class MyName extends Name{
     public function sayMyName($name)
    {
        return "My name is $name";
    }
}

$myname = new MyName();
echo $myname->sayMyName('Alex');
?>