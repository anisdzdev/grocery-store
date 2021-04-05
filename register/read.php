<?php

if (($handle = fopen("users.csv", "r")) !== FALSE) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $found = FALSE;
    while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
        if ($row[0] === $email && $row[1] === $password) {
            $found = TRUE;
            break;
        }
    }
    fclose($handle);
    if ($found) {
        $message = "Welcome $row[2]";
        $logged = TRUE;
        include('../index.php');
    } else {
        $message = "$email: Invalid username and/or password.";
        $logged = FALSE;
        include('signin.php');
    }
} else {
    $message = "Something wrong occurred. Cannot continue!";
    $logged = FALSE;
    include('signin.php');
}
