<?php 
// require_once('class1.php');
// require_once('class2.php');
spl_autoload_register(function($classname){
    require_once("$classname.php");
});


// spl_autoload_register( function($classname) {
//     if (is_file('$class','.php')) {
//         require_once('class'.$classname.'.php');
//     }
// });

$cl1 = new Class1();
$cl1->showInfo();
 
echo "<br>";

$cl2 = new Class2();
$cl2->showInfo();

?>