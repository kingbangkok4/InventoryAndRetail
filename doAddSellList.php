<?php

include "./lib/std.php";
include "./lib/helper.php";
include "./lib/dbConnector.php";
include "./model/sell.php"; 

$obj_order = new sellOrder();
$array_product =  $_REQUEST["array_product"];

$data_order = array(
   "customer_id" => $_REQUEST["searchID"],
   "total_price" => $_REQUEST["total_price"],
   "user_id" => $_SESSION["id"]	
   );
$order_no = $obj_order->insertOrder($data_order);

foreach ($array_product as $i => $row4) {
    $data_sale = array(
        "product_id" => $row4["product_id"],
        "product_price" => $row4["product_price"],
        "qty" => $row4["qty"],
        "sum_price" => $row4["product_price"]*$row4["qty"],
        "order_no" => $order_no	
    );
    $obj_order->insertSell($data_sale);
}
  redirect("index.php?viewName=sellPage&id=&idProduct=&isClear=1&idProductClear=-1");
  
  ?>