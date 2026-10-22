<?php

//find opcache status working

if(!function_exists('opcache_get_status')){
    die("Opcache extension is not enabled your  php");

}

$status = opcache_get_status(false);

if(!$status){
    echo "<b> Opcache is active but currently Disabled Check (Php.ini) </b>";
    exit;

}


//Memory and performance get

$memUsed = round($status['memory_usage']['used_memory'] / 1024 / 1024, 2);
$memFree = round($status['memory_usage']['free_memory'] / 1024 / 1024, 2);
$hitRate = round($status['opcache_statistics']['opcache_hit_rate'], 2);
$cachedFiles = $status['opcache_statistics']['num_cached_scripts'];

echo "<h2>Opcache Status Overview</h2>";
echo "Used RAM (Used Memory): <b>{$memUsed} MB </b></br>";
echo "Saving RAM(free Memory): <b>{$memFree} MB </b></br>";
echo "OPcache Hit Rate (correctly): <b>{$hitRate}%</b> (target: > 98%)</br>"; 
echo "Cached Files: <b>{$cachedFiles}</b></br>";








?>