<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];

$file = fopen("users.csv", 'a+');
fwrite($file,$email . "," . $password ."," .$name."\n");
fclose($file);

$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
$_SESSION['name'] = $name;


//if (empty($_POST['name']) || empty($_POST['orders']) || empty($_POST['totOrderAmount']))
//{
//
//}
//else {
//    $_SESSION['name'] = $name;
//    $_SESSION['orders'] = $orders;
//    $_SESSION['totOrderAmount'] = $totOrderAmount;
//}

    header("Location: user-list.php");
exit();


