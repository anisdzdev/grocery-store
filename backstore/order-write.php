<?php

include ('order-save.php');


$orders = fopen("database/orders.csv", "a+");

if ($orders == false) {
    echo "error opening the file!";
    exit();
} else {
    echo "file opened";
}

//if (!(file_exists("$orders"))) {
//    fwrite($orders, "buyername,total,status,order# \n");
//}

$buyerName = filter_input(INPUT_POST, 'name');
$orderNum = filter_input(INPUT_POST, 'order#');
$total = filter_input(INPUT_POST, 'total');
$status = filter_input(INPUT_POST, 'status');

while (($row=fgetcsv("database/orders.csv", $separator=",") !== FALSE)){
    echo "hellothere";
    echo $row;
    if($row[1] == $orderNum){
        echo "helooooo";
        $row[0] = $buyerName;
        $row[1] = $orderNum;
        $row[2] = $total;
        $row[3] = $status;
        fputcsv($orders, $row);
        break;

    } else {
        echo "hey";
        echo $row[0];
        fwrite($orders, $buyerName.",".$orderNum.",".$total.",".$status."\n");
        break;
    }
}
fclose($orders);


