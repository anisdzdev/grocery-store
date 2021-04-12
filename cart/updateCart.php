<?php
if(!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['action']) && isset($_POST['id'])) {
    $action = $_POST['action'];
    $id = $_POST['id'];
    $value = $_POST['value'] ?? 1;
    $cart = $_SESSION['cart'] ?? [];
    switch ($action){
        case 'remove':
            unset($cart[$id]);
            break;
        case 'add':
            $cart[$id] = (isset($cart[$id])) ? $cart[$id]+1 : 1;
            break;
        case 'set':
            $cart[$id] = $value ;
            break;
        case 'minus':
            $cart[$id] = (isset($cart[$id])) ? $cart[$id]-1 : 1;
            if($cart[$id]< 1){
                unset($cart[$id]);
            }
            break;
    }
    $_SESSION['cart'] = $cart;
    print_r($cart);
}