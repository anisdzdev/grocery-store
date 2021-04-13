<?php

session_start();

$productName = $_POST['name'];
$proDes = $_POST['proDes'];
$price = $_POST['price'];
$aisle = $_POST['aisle'];

$file = fopen("database/products.csv", 'a+');
fwrite($file,$productName . "," . $proDes ."," .$price."," .$aisle."\n");
fclose($file);

$_SESSION['name'] = $productName;
$_SESSION['proDes'] = $proDes;
$_SESSION['price'] = $price;
$_SESSION['aisle'] = $aisle;

header("Location: product-list.php");
exit();

