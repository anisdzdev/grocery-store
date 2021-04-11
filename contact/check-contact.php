
<?php

if (!isset($_SESSION)) {
    session_start();
}

//    $userList = fopen('../backstore/database/users.csv', 'r');
    $orderList = fopen('../backstore/database/orders.csv', 'r');


    $_SESSION['isFound'] = false;
    $_SESSION['orderFound'] = false;

    $user = filter_input(INPUT_POST, 'user');
    $orderNumber = filter_input(INPUT_POST, 'orderNum');
    $item = filter_input(INPUT_POST, 'item');
    $message = filter_input(INPUT_POST, 'message');

    $_SESSION['inquiryName'] = $user;

    while (($rowOrders = fgetcsv($orderList, 1000, ",")) !== FALSE) {
        $rowOrders++;
        if($rowOrders[0] == $user && $rowOrders[1] == $orderNumber){
            $_SESSION['isFound'] = true;
            $_SESSION['orderFound'] = true;
            $contact =  fopen('../backstore/database/contact.csv', 'a+');
            $string = $user . "," . $orderNumber . "," . $item . "," . $message . "\n";
            fwrite($contact, $string);
            fclose($contact);
            break;

        } else if ($rowOrders[0] == $user) {
            $_SESSION['isFound'] = true;
            break;

        }else if ($rowOrders[1] == $orderNumber) {
            $_SESSION['orderFound'] = true;
            break;

        }

    }

    include('contact-result.php');


//    while (($rowUsers = fgetcsv($userList, 1000, ",")) !== FALSE) {
//
//        if ($rowUsers[2] === $user) {
//
//            $_SESSION['isFound'] = true;
//
//            while (($rowOrders = fgetcsv($orderList, 1000, ",")) !== FALSE) {
//                $rowOrders++;
//               if($rowOrders[1]== $orderNumber){
//                   $_SESSION['orderFound'] = true;
//                   include('contact-result.php');
//                   break;
//               } else {
//                   $_SESSION['orderFound'] = false;
//                   include('contact-result.php');
//                   echo "order number not there";
//                   break;
//               }
//
//
//            }
//
//        }
//
//
//
//        //session_unset();
//    }


//        if( $_SESSION['isFound'] === false) {
//
//            include('contact-result.php');
//
//        }

session_unset();


fclose($orderList);
//fclose($userList);