<?php 

abstract class Programmer{

    function solveTheProblem();
}


class EmployeeA extends Programmer{
    function solveTheProblem()
    {
        echo "I solve the problem using my imagination";
    }
}

class EmployeeB extends Programmer{
    function solveTheProblem()
    {
        echo "I solve the problem using tutorials";
    }
}

class EmployeeC extends Programmer{
    function solveTheProblem()
    {
        echo "I solve the problem using reading and complementing it";
    }
}

?>