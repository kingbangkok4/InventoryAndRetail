<?php
include "./lib/std.php";
include "./lib/helper.php";
include "./lib/dbConnector.php";
include "./model/customer.php";
// insert employee
$emp = new Customer();
$data = array(
	
    "fullname" => $_REQUEST["name"],
    "mobile" => $_REQUEST["mobile"],
    "email" => $_REQUEST["email"],
    "address" => $_REQUEST["address"],
    "province" => $_REQUEST["line"],
   
);
$emp->update($data, " {$_REQUEST["user_ref"]} ");
var_dump($data);
//echo mysql_info();
redirect("index.php?viewName=customerList");