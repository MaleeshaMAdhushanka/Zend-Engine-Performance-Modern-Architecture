<?php 

//A Php Array Assign the Another array its not Dual Copy 


$a = [1,2,3];

$b = $a;

$b[] = 4;

echo "<b> $b </b>";

//in this movement Array is not copy  but the two variable is pointing to the same memory point
//refcount = 2




?>