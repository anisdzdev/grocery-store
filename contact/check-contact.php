<?php

function checkUserMatch(){
    $userList = fopen('../backstore/users.csv', 'a+');

    $user = filter_input(INPUT_POST, 'user');

    while (($row = fgetcsv($userList, 1000, ",")) !== FALSE) {
        if ($row[0] === $user) {

        } else {

        }

    }
}
