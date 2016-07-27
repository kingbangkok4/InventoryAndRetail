<?php

include "./lib/std.php";
include "./lib/helper.php";
include "./lib/dbConnector.php";
include "./model/sell.php"; 

$obj_order = new sellOrder();

 $data_order = array(
    "customer_id" => $_REQUEST["fname"]." ".$_REQUEST["lname"],
    "order_date" => $_REQUEST["mobile"],
    "status" => $_REQUEST["email"],
    "total_price" => $_REQUEST["address"],
    "user_id" => $_REQUEST["line"]	
    );
$order_no = $obj_order->insertOrder(data_order);

$data_sale = array(
    "product_id" => $_REQUEST["fname"]." ".$_REQUEST["lname"],
    "qty" => $_REQUEST["mobile"],
    "sale_id" => $_REQUEST["email"],
    "sum_price" => $_REQUEST["address"],
    "order_no" => $order_no	
);

$obj_order->insertSale($data_sell);