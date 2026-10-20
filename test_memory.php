<?php

//PHP code eke starting memory eka
 echo "Starting memory: " .(memory_get_usage() / 1024 / 1024) . " MB<br>";


 //2 Memory eka fill kranna big arrage ekak vreating kara


 $data = [];

 for($i = 0; $i < 100000; $i++){
    $data[] = "Test data item " . $i;
 }

 // 3 Script eka run wena and maximum giya ram eke (Peak Memory pramanaya)

 $peakMemory = memory_get_peak_usage(true) / 1024 / 1024;

 echo "<b>Peak Ram usage: " .round($peakMemory, 2). " MB</b><br>";
















?>