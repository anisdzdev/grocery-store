<?php

include ('product-save.php');


$products = fopen("database/products.csv", "a+");

if ($products == false) {
    echo "error opening the file!";
    exit();
} else {
    console.log("File Opened!");
}

$productName = filter_input(INPUT_POST, 'name');
$price = filter_input(INPUT_POST, 'price');
$proDes = filter_input(INPUT_POST, 'proDes');
$aisle = filter_input(INPUT_POST, 'aisle');


$found = FALSE;
$line = 0;
while (($row = fgetcsv($products, 1000, ",")) !== FALSE) {
    if ($row[1] === $productName) {

        $output = fopen("database/temp-products.csv", 'a+');
        $string = file_get_contents('database/products.csv');
        $data = explode("\n", $string);

        $updatedValue = $productName . "," . $price . "," . $proDes . "," . $aisle;
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

    fwrite($products, $productName . "," . $price . "," . $proDes . "," . $aisle . "\n");
    fclose($products);
}

fclose($products);




//
//session_start();
//
//$productName = $_POST['name'];
//$proDes = $_POST['proDes'];
//$price = $_POST['price'];
//$aisle = $_POST['aisle'];
//
//$file = fopen("database/products.csv", 'a+');
//fwrite($file,$productName . "," . $proDes ."," .$price."," .$aisle."\n");
//fclose($file);
//
//$_SESSION['name'] = $productName;
//$_SESSION['proDes'] = $proDes;
//$_SESSION['price'] = $price;
//$_SESSION['aisle'] = $aisle;
//
//header("Location: product-list.php");
//exit();
//
