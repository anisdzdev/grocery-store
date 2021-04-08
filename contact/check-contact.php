<?php

function checkUserMatch(){

    $userList = fopen('../users.csv', 'r');
    $_SESSION['isFound'] = false;

    $user = filter_input(INPUT_POST, 'user');
    $_SESSION['inquiryName'] = $user;

    while (($row = fgetcsv($userList, 1000, ",")) !== FALSE) {
        if ($row[2] === $user) {
            $_SESSION['isFound'] = true;
            include('contact-result.php');


        } else {
            $_SESSION['isFound'] = false;
            include('contact-result.php');
        }

    }
}
