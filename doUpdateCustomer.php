<?php
header('Content-Type: text/html; charset=utf-8');
include "./lib/std.php";
include "./lib/helper.php";
include "./lib/dbConnector.php";
include "./model/customer.php";
// insert employee
$emp = new Customer();
$data = array(
	
    "name" => $_REQUEST["name"],
    "mobile" => $_REQUEST["mobile"],
    "email" => $_REQUEST["email"],
    "address" => $_REQUEST["address"],
    "line" => $_REQUEST["line"],
   
);
$emp->update($data, " id={$_REQUEST["id"]} ");
var_dump($data);

redirect("index.php?viewName=customerList");