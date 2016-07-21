<?php
include "./lib/std.php";
include "./lib/helper.php";
include "./lib/dbConnector.php";
include "./model/customer.php";

$pro = new Customer();
$pro->delete(" id = {$_REQUEST["id"]}");
redirect("index.php?viewName=customerList");

