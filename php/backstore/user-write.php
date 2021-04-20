<?php

$users = fopen("database/users.csv", "a+");

if ($users == false) {
    echo "error opening the file!";
    exit();
}

$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');
$address = filter_input(INPUT_POST, 'address');
$city = filter_input(INPUT_POST, 'city');
$province = filter_input(INPUT_POST, 'province');
$zip = filter_input(INPUT_POST, 'zip');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$phone = filter_input(INPUT_POST, 'phone');



$found = FALSE;
$line = 0;
while (($row = fgetcsv($users, 1000, ",")) !== FALSE) {
    if ($row[0] === $email) {

        $string = file_get_contents('database/users.csv');
        $data = explode("\n", $string);
        $updatedValue = $email . "," . $password . "," . $firstName . "," . $lastName. "," .$address. "," .$city. "," .$zip. "," .$province. "," .$phone;
        $data[$line] = $updatedValue;
        file_put_contents('database/users.csv', implode("\n", $data));
        $found = TRUE;
        break;
    }
    $line++;
}
if ($found == FALSE) {
    fwrite($users, $email . "," . $password . "," . $firstName . "," . $lastName. "," .$address. "," .$city. "," .$zip. "," .$province. "," .$phone . "\n");

}
fclose($users);
include ('user-list.php');


