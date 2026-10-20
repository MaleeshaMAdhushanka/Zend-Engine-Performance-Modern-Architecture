<?php

// function readCsvLines(string $path): Generator
//  {

//     $handle = fopen($path, 'r');


//      try {
//         while (($line = fgets($handle)) !== false) {
//             yield str_getcsv(rtrim($line));
//         }
    

//      } finally {
//         fclose($handle);
//      }

// }


// foreach (readCsvLines('10GB.csv') as $row) {
//     // Process each row
//     print_r($row);

// }


// Question 2

//use generator and data one by one return

function getNumbersLazy($max){
    for($i = 1; $i <= $max; $i++){
        yield $i; 

    }


}

echo "ආරම්භක RAM: " . round(memory_get_usage() / 1024, 2) . " KB<br>";


// අංක මිලියන 5 ක් Loop කරමු (නමුත් RAM එක පිරෙන්නේ නැත)
foreach (getNumbersLazy(5000000) as $number) {
    if ($number === 5000000) {
        echo "අවසාන අංකය: " . $number . "<br>";
    }
}

echo "අවසාන Peak RAM (ඉතා අඩු අගයකි): " . round(memory_get_peak_usage() / 1024, 2) . " KB<br>";






?>
