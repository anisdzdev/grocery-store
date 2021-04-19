<?php
//$firstName = $_POST['firstName'];
//$lastName = $_POST['lastName'];
//$address = $_POST['address'];
//$city = $_POST['city'];
//$zip = $_POST['zip'];
//$province = $_POST['province'];
//$phone = $_POST['phone'];
//$email = $_POST['email'];
//$password = $_POST['password'];

$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');
$address = filter_input(INPUT_POST, 'address');
$city = filter_input(INPUT_POST, 'city');
$zip = filter_input(INPUT_POST, 'zip');
$province = filter_input(INPUT_POST, 'province');
$phone = filter_input(INPUT_POST, 'phone');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

$file = fopen("../backstore/database/users.csv", "a+");

$found = FALSE;
while (($row = fgetcsv($file, 1000, ",")) !== FALSE) {
    if ($row[0] === $email) {
        $found = TRUE;
        break;
    }
}
if ($found == FALSE) {
    fwrite($file,$email . "," . $password . "," . $firstName . "," . $lastName. "," . $address. "," . $city. "," . $zip. "," . $province. "," . $phone . "\n");
    fclose($file);
    include('success.php');
}
else {
    fclose($file);
    include ('signup.php');
}

