<?php


//Creating array

$a = range(1, 1000000);
echo "1.\$a හැදූ පසු RAM: " . round(memory_get_usage() / 1024 / 1024, 2) . " MB<br>";

//$a assign to $b

$b = $a;
echo "2. \$b = \$a කළ පසු RAM (වෙනස් නොවේ): " . round(memory_get_usage() / 1024 / 1024, 2) . " MB<br>";


//$b Change the B 

$b[] = 1000001;
echo "3. \$b වෙනස් කළ පසු RAM (දැන් Copy විය): " . round(memory_get_usage() / 1024 / 1024, 2) . " MB<br>";




?>