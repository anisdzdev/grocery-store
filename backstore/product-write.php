<?php

$products = fopen("database/products.csv", "a+");

if ($products == false) {
    echo "error opening the file!";
    exit();
}

$productName = filter_input(INPUT_POST, 'name');
$price = filter_input(INPUT_POST, 'price');
$discount = filter_input(INPUT_POST, 'discount');
$quantityType = filter_input(INPUT_POST, 'quantityType');
$image = filter_input(INPUT_POST, 'image');
$proDes = filter_input(INPUT_POST, 'proDes');
$aisle = filter_input(INPUT_POST, 'aisle');


$found = FALSE;
$line = 0;
while (($row = fgetcsv($products, 1000, ",")) !== FALSE) {
    if ($row[1] === $productName) {
        $id = $row[0];

        $output = fopen("database/temp-products.csv", 'a+');
        $string = file_get_contents('database/products.csv');
        $data = explode("\n", $string);

        $updatedValue = $id . "," .$productName . "," . $discount . "," . $price. "," . $quantityType. "," . $image. "," . $aisle . "," . $proDes;
        $data[$line] = $updatedValue;
        file_put_contents('database/temp-products.csv', implode(PHP_EOL, $data));
        unlink("database/products.csv");
        $orders = rename('database/temp-products.csv', 'database/products.csv');
        $found = TRUE;

        break;
    }
    $line++;
}
if ($found == FALSE) {
    $no_of_lines = count(file("database/products.csv"));
    $data = file("database/products.csv");
    $line = $data[count($data)-1];
    $realData = explode(",", $line);
    $id = $realData[0] + 1;
    echo $line;

    fwrite($products, $id . "," .$productName . "," . $discount . "," . $price. "," . $quantityType. "," . $image. "," .$aisle . "," . $proDes . "\n");
    fclose($products);
}



include ('product-list.php');
