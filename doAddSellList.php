<?php

include "./lib/std.php";
include "./lib/helper.php";
include "./lib/dbConnector.php";
include "./model/sell.php"; 

$obj_order = new sellOrder();

 $data_order = array(
    "customer_id" => $_REQUEST["searchID"] ,
    "order_date" => $_REQUEST["mobile"],
    "total_price" => $_REQUEST["total_price"],
    "user_id" => $_SESSION["id"]	
    );
$order_no = $obj_order->insertOrder(data_order);

$data_sale = array(
    "product_id" => $_REQUEST["product_id"],
    "qty" => $_REQUEST["qty"],
    "sum_price" => $_REQUEST["total_price"],
    "order_no" => $order_no	
);

$obj_order->insertSale($data_sell);