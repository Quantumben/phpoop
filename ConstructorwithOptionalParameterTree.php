<?php 

class Tree{
    public $leavesColor;
    public $numberOfLeaves;


    //constructor - with optional parameters

    function __construct($leavesColor ='', $numberOfLeaves = '')
    {
        $this->leavesColor = $leavesColor;
        $this->numberOfLeaves = $numberOfLeaves;
    }

    function describeTree(){
        echo "This tree has $this->numberOfLeaves $this->leavesColor leaves.";
    }

}

//case1: with Parameters
$tree = new Tree('green', 1000);
$tree->describeTree();

echo "<br><br>";

//case2: without Parameters
$tree2 = new Tree();
$tree2->leavesColor = 'yellow';
$tree2->numberOfLeaves = 2000;
$tree2->describeTree();

?>