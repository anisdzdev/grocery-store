<?php

$productName = $_GET['name'];

$products = fopen("database/products.csv", "a+");
$output = fopen("database/temp-products.csv", 'a+');

if ($products == false) {
    echo "error opening the file!";
    exit();
}

$found = FALSE;
$line = 0;
$data = "";
while (($row = fgetcsv($products, 1000, ",")) !== FALSE) {
    if ($row[1] !== $productName) {
        fputcsv($output, $row);
        $string = file_get_contents("database/temp-products.csv");
        $data = explode("\n", $string);
    }
}

file_put_contents('database/products.csv', implode(PHP_EOL, $data));
unlink("database/products.csv");
fclose($products);
fclose($output);
$products1 = rename('database/temp-products.csv', 'database/products.csv');

include ('product-list.php');
?>

