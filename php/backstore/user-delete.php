<?php

$userEmail = $_GET['email'];

$users = fopen("database/users.csv", "a+");

if ($users == false) {
    echo "error opening the file!";
    exit();
}

$found = FALSE;
$line = 0;
$string = file_get_contents("database/users.csv");
$data = explode("\n", $string);
while (($row = fgetcsv($users, 1000, ",")) !== FALSE) {
    if ($row[0] === $userEmail) {
        unset($data[$line]);
        break;
    }
    $line++;
}

file_put_contents('database/users.csv', implode("\n", $data));
fclose($users);


include ('user-list.php');