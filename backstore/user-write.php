<?php

include ('user-save.php');


$users = fopen("database/users.csv", "a+");

if ($users == false) {
    echo "error opening the file!";
    exit();
} else {
    console.log("File Opened!");
}

$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');
$address = filter_input(INPUT_POST, 'address');
$city = filter_input(INPUT_POST, 'city');
$province = filter_input(INPUT_POST, 'province');
$zip = filter_input(INPUT_POST, 'zip');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');



$found = FALSE;
$line = 0;
while (($row = fgetcsv($users, 1000, ",")) !== FALSE) {
    if ($row[0] === $email) {

        $output = fopen("database/temp-users.csv", 'a+');
        $string = file_get_contents('database/users.csv');
        $data = explode("\n", $string);
        $updatedValue = '\n' . $email . "," . $password . "," . $firstName . "," . $lastName. "," .$address. "," .$city. "," .$zip. "," .$province;
        $data[$line] = $updatedValue;
        file_put_contents('database/temp-users.csv', implode(PHP_EOL, $data));
        unlink("database/users.csv");

        $users = rename('database/temp-users.csv', 'database/users.csv');
        $found = TRUE;

        break;
    }
    $line++;
}
if ($found == FALSE) {
    fwrite($users, $email . "," . $password . "," . $firstName . "," . $lastName. "," .$address. "," .$city. "," .$zip. "," .$province . "\n");
    fclose($users);
}

fclose($users);




