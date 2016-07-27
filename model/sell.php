<?php

class sellOrder {
    public $sql;

    public function insertSell($data) {
       $this->sql = "INSERT INTO tb_sell ( `order_no`,`product_id`, `qty`, `sale_id`,`sum_price`) VALUES ( '{$data["order_no"]}','{$data["product_id"]}', '{$data["qty"]}', '{$data["sale_id"]}', '{$data["sum_price"]}') ";
         
        mysql_query("SET NAMES 'utf8'");
		$query = mysql_query($this->sql);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    
    public function insertOrder($data) {
       $this->sql = "INSERT INTO tb_sell ( `customer_id`,`order_date`,`status`, `total_price`,`user_id`) VALUES ( '{$data["customer_id"]}','{$data["order_date"]}','{$data["status"]}',  '{$data["total_price"]}', '{$data["user_id"]}') ";
         
        mysql_query("SET NAMES 'utf8'");
		$query = mysql_query($this->sql);
        if ($query) {
            return mysql_insert_id();
        } else {
            return false;
        }
    }
}
