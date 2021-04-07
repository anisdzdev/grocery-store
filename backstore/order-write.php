<?php

//include ('order-save.php');


$orders = fopen("database/orders.csv", "a+");

if ($orders == false) {
    echo "error opening the file!";
    exit();
} else {
    console.log("File Opened!");
}

$buyerName = filter_input(INPUT_POST, 'name');
$orderNum = filter_input(INPUT_POST, 'order#');
$total = filter_input(INPUT_POST, 'total');
$status = filter_input(INPUT_POST, 'status');


$found = FALSE;
$line = 0;
while (($row = fgetcsv($orders, 1000, ",")) !== FALSE) {
    if ($row[1] === $orderNum) {
//        fclose($orders);
//        $input = fopen("database/orders.csv", 'r');
//        $output = fopen("database/temp-orders.csv", 'w');
          $string = file_get_contents('database/orders.csv');
          $data = explode("\n", $string);
          array_splice($data, $line, $line);
          $updatedValue = $buyerName . "," . $orderNum . "," . $total . "," . $status . "\n";
          array_push($data, $updatedValue);
          file_put_contents('database/orders.csv', implode(PHP_EOL, $data));
          print_r($data);
          echo "<br> $line";


          $found = TRUE;
          break;
    }
    $line++;
}
if ($found == FALSE) {
    fwrite($orders, $buyerName . "," . $orderNum . "," . $total . "," . $status . "\n");
    fclose($orders);
}

fclose($orders);








//while (($row=fgetcsv("database/orders.csv", $separator=",") !== FALSE)){
//    echo "hellothere";
//    echo $row;
//    if(is_null($row)) {
//        break;
//    }
//
//    if($row[1] == $orderNum){
//        echo "helooooo";
//        $row[0] = $buyerName;
//        $row[1] = $orderNum;
//        $row[2] = $total;
//        $row[3] = $status;
//        fputcsv($orders, $row);
//        break;
//
//    } else {
//        echo "hey";
//        echo $row[0];
//        fwrite($orders, $buyerName.",".$orderNum.",".$total.",".$status."\n");
//        break;
//    }
//
//}







