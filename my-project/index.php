<?php 

//Composer Autoloading includeing

require_once __DIR__ . '/vendor/autoload.php';


use App\Services\PaymentService;

$payment = new PaymentService();

echo $payment->process();



?>