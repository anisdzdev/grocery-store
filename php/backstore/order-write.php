<?php
if (!isset($_SESSION)) {
    session_start();
}
$orders = fopen("database/orders.csv", "a+");

if ($orders == false) {
    echo "error opening the file!";
    exit();
}

$buyerName = filter_input(INPUT_POST, 'name');
$orderNum = filter_input(INPUT_POST, 'orderNum');
$total = filter_input(INPUT_POST, 'total');
$status = filter_input(INPUT_POST, 'status');
$cart = filter_input(INPUT_POST, 'cart');


$found = FALSE;
$line = 0;
while (($row = fgetcsv($orders, 1000, ",")) !== FALSE) {
    if ($row[1] === $orderNum) {

        $string = file_get_contents('database/orders.csv');
        $data = explode("\n", $string);
        $updatedValue = $buyerName . "," . $orderNum . "," . $total . "," . $status . "," . "\"" . $cart . "\"";
        $data[$line] = $updatedValue;
        file_put_contents('database/orders.csv', implode(PHP_EOL, $data));
        $found = TRUE;
        include('sendEmail.php');
        break;
    }
    $line++;
}
if ($found == FALSE) {
    fwrite($orders, $buyerName . "," . $orderNum . "," . $total . "," . $status . "," . "\"" . $cart . "\"" . "\n");

}
fclose($orders);
include('order-list.php');











