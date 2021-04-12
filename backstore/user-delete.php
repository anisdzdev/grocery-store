<?php

$userEmail = $_GET['email'];

$users = fopen("database/users.csv", "a+");
$output = fopen("database/temp-users.csv", 'a+');

if ($users == false) {
    echo "error opening the file!";
    exit();
}

$found = FALSE;
$line = 0;
$data = "";
while (($row = fgetcsv($users, 1000, ",")) !== FALSE) {
    if ($row[0] !== $userEmail) {
        fputcsv($output, $row);
        $string = file_get_contents("database/temp-users.csv");
        $data = explode("\n", $string);
    }
}

file_put_contents('database/users.csv', implode(PHP_EOL, $data));
unlink("database/users.csv");
fclose($users);
fclose($output);
$n_users = rename('database/temp-users.csv', 'database/users.csv');
//fclose('database/users.csv');

include ('user-list.php');
?>

