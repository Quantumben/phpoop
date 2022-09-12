<?php 
declare(strict_types=1);

use Person as GlobalPerson;

class Person{
    private $name;
    private $age;

    public function setInfo(string $name, int $age): void {
        $this->name = $name;
        $this->age = $age;

    }

    function getInfo(): string{
        return "My name is $this->name and i am $this->age years old";
    }
}


$person1 = new GlobalPerson();
$person1->setInfo('benedictg', 20);
echo $person1->getInfo();

?>