<?php
if(!isset($_SESSION)) {
    session_start();
}

$cart = $_SESSION['cart'] ?? [];
$name = $_SESSION['name'] ?? 'tester';
$total = $_POST['total'] ?? 0;
$id = generateId();
$file = fopen("../backstore/database/orders.csv", 'a+');
$output = implode(', ', array_map(
    function ($v, $k) { return sprintf("%s=%s", $k, $v); },
    $cart,
    array_keys($cart)
));
fwrite($file, $name . "," . $id ."," .round($total, 2)."$,Created,\"[". $output. "]\"\n");
fclose($file);

echo $id;

function generateId()
{
    $temp_id = mt_rand(10000, 99999);;
    for($i = 0; $i<2; $i++){
        $temp_id .= chr(rand(65,90));
    }
    return $temp_id;
}