<?php
if(!isset($_SESSION)) {
    session_start();
}

$cart = $_SESSION['cart'] ?? [];
$id = generateId();
$file = fopen("../backstore/database/orders.csv", 'a+');
fwrite($file,$email . "," . $password ."," .$name."\n");
fclose($file);

echo $id;

function generateId(): int|string
{
    $temp_id = mt_rand(10000, 99999);;
    for($i = 0; $i<2; $i++){
        $temp_id .= chr(rand(65,90));
    }
    return $temp_id;
}