<?php
if(!isset($_SESSION)) {
    session_start();
}

if (($handle = fopen("../users.csv", "r")) !== FALSE) {

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
        $welcome = "Welcome $row[2] to Tropical Flavors!";
        $logged = TRUE;
        $_SESSION['logged'] = $logged;
        $_SESSION['welcome'] = $welcome;
        $_SESSION['name'] = $row[2];
        header("Location: ../index.php");
        exit();
    }
    if($email == 'admin' && $password == 'admin'){
        $welcome = "Welcome Admin to Tropical Flavors!";
        $logged = TRUE;
        $_SESSION['admin'] = True;
        $_SESSION['logged'] = $logged;
        $_SESSION['welcome'] = $welcome;
        $_SESSION['name'] = "Admin";
        header("Location: ../backstore/user-list.php");
        exit();
    }
        else {
        $message = "Invalid email and/or password.";
        include('signin.php');
    }
} else {
    $message = "Something wrong occurred. Cannot continue!";
    include('signin.php');
}
