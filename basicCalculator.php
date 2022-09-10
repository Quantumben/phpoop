<?php 

class BasicCalculator{

    function showResult($number1, $operation, $number2){
        switch($operation){
            case "+":
                $result = $number1 + $number2;
                echo "The result of $number1 + $number2 is: " .$result;
                break;
            
            case "-":
                $result = $number1 - $number2;
                echo "The result of $number1 - $number2 is: " .$result;
                break;

            case "*":
                $result = $number1 * $number2;
                echo "The result of $number1 * $number2 is: " .$result;
                break;

            case "/":
                $result = $number1 / $number2;
                echo "The result of $number1 / $number2 is: " .$result;
                break;

            default:
                echo "This calculation cannot be perform, please check your input";
        }
    }
}

$calculator1 = new BasicCalculator();
$calculator1->showResult(2, "*", 5);

?>