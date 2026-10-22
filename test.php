<?php 



$requestStart = $_SERVER['REQUEST_TIME_FLOAT'];

//current use time in microseconds 
$timeTaken = microtime(true)- $requestStart;

echo "Request  eka start wela script ekata enna giya time eka" .$timeTaken . " seconds";


register_shutdown_function(function(){
    echo "<br><br>[RSHUTDOWN]: Script is ending or coming Error But. this will be running . </br>"; 

    $error = error_get_last();

    if($error){
        echo "<br> end Error eka: " .$error['message'];
    }

});


echo "1. Code is starting...<br>";

// Script is stopping 
die("Script is stopping...!");

echo "2. Code is correctly ending...<br>";


?>