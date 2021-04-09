<?php



    $userList = fopen('../users.csv', 'r');
    $orderList = fopen('database/orders.csv', 'r');
    $_SESSION['isFound'] = false;
    $_SESSION['orderFound'] = false;

    $user = filter_input(INPUT_POST, 'user');
    $orderNumber = filter_input(INPUT_POST, 'orderNum');
    $_SESSION['inquiryName'] = $user;

    while (($rowUsers = fgetcsv($userList, 1000, ",")) !== FALSE) {
        if ($rowUsers[2] === $user) {
            $_SESSION['isFound'] = true;

            while (($rowOrders = fgetcsv($orderList, 1000, ",")) !== FALSE) {
               if($rowOrders[1]== $orderNumber){
                   $_SESSION['orderFound'] = true;
                   include('contact-result.php');
               } else {
                   $_SESSION['orderFound'] = false;
                   include('contact-result.php');
               }

            }

        } else {
            $_SESSION['isFound'] = false;
            include('contact-result.php');
        }


}
