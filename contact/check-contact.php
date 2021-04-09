
<?php

if (!isset($_SESSION)) {
    session_start();
}

    $userList = fopen('../backstore/database/users.csv', 'r');
    $orderList = fopen('../backstore/database/orders.csv', 'r');
    $_SESSION['isFound'] = false;
    $_SESSION['orderFound'] = false;

    $user = filter_input(INPUT_POST, 'user');
    $orderNumber = filter_input(INPUT_POST, 'orderNum');
    $_SESSION['inquiryName'] = $user;

    while (($rowUsers = fgetcsv($userList, 1000, ",")) !== FALSE) {
        if ($rowUsers[2] === $user) {
            $string = file_get_contents('database/orders.csv');
            $data = explode("\n", $string);
            $_SESSION['isFound'] = true;

            while (($rowOrders = fgetcsv($orderList, 1000, ",")) !== FALSE) {
                $rowOrders++;
               if($rowOrders[1]== $orderNumber){
                   $_SESSION['orderFound'] = true;
                   include('contact-result.php');
                   break;
               } else {
                   $_SESSION['orderFound'] = false;
                   include('contact-result.php');
                   echo "order number not there";
                   break;
               }


            }

        }

        if( $_SESSION['isFound'] === false) {

            include('contact-result.php');
            break;
        }

        //session_unset();

}

fclose($orderList);
fclose($userList);