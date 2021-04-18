<?php

$orderNumber = $_GET['var'];

$orders = fopen("database/orders.csv", "a+");

if ($orders == false) {
    echo "error opening the file!";
    exit();
}

$found = FALSE;
$line = 0;
$string = file_get_contents("database/orders.csv");
$data = explode("\n", $string);
while (($row = fgetcsv($orders, 1000, ",")) !== FALSE) {
    if ($row[1] === $orderNumber) {
        unset($data[$line]);
        break;
    }
    $line++;
}
file_put_contents('database/orders.csv', implode("\n", $data));
fclose($orders);


include ('order-list.php');