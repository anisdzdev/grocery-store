<?php

$productName = $_GET['name'];

$products = fopen("database/products.csv", "a+");

if ($products == false) {
    echo "error opening the file!";
    exit();
}

$found = FALSE;
$line = 0;
$string = file_get_contents("database/products.csv");
$data = explode("\n", $string);
while (($row = fgetcsv($products, 1000, ",")) !== FALSE) {
    if ($row[1] === $productName) {
        unset($data[$line]);
        break;
    }
    $line++;
}

file_put_contents('database/products.csv', implode("\n", $data));
fclose($products);

include ('product-list.php');