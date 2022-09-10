<?php 
/*
Calcualte the monthly salary of an employee 

who make take some days off and he works five days a week 
for eight hours per day

given that each month has 23 working days 


the employeee earns 15euros per hour
*/

class Salary{

  

    function calculateSalary($dayoff){
        
        $monthlySalary = (23 - $dayoff)*8*15;
        echo "The salary of the employee this month is $monthlySalary euros";


    }


}


$juneSalary = new Salary();
$juneSalary->calculateSalary(2)

?>