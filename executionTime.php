<?php 



//The RINIT step $_SERVER['REQUEST_TIME_FLOAT']; creating

$requestStart = $_SERVER['REQUEST_TIME_FLOAT'];

//current use time in microseconds 
$timeTaken = microtime(true)- $requestStart;

echo "Request  eka start wela script ekata enna giya time eka" .$timeTaken . " seconds";













?>