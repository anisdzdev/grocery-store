<?php

$buyerName = $_GET['var'];

$orders = fopen("database/orders.csv", "a+");
$output = fopen("database/temp-orders.csv", 'a+');

if ($orders == false) {
    echo "error opening the file!";
    exit();
}

$found = FALSE;
$line = 0;
while (($row = fgetcsv($orders, 1000, ",")) !== FALSE) {
    if ($row[0] !== $buyerName) {
        fputcsv($output, $row);
        $string = file_get_contents("database/temp-orders.csv");
        $data = explode("\n", $string);

        continue;
    }
}

file_put_contents('database/temp-orders.csv', implode(PHP_EOL, $data));
unlink("database/orders.csv");
fclose($orders);
fclose($output);
$orders = rename('database/temp-orders.csv', 'database/orders.csv');


include ('order-list.php');
?>

