<?php

class sellOrder {
    public $sql;

    public function insertSell($data) {
       $this->sql = "INSERT INTO tb_sell ( `order_no`,`product_id`, `product_price`, `qty`,`sum_price`) VALUES ( '{$data["order_no"]}','{$data["product_id"]}', '{$data["product_price"]}', '{$data["qty"]}', '{$data["sum_price"]}') ";        
        mysql_query("SET NAMES 'utf8'");
		$query = mysql_query($this->sql);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    
    public function insertOrder($data) {
       $this->sql = "INSERT INTO tb_order ( `customer_id`, `total_price`,`user_id`) VALUES ( '{$data["customer_id"]}', '{$data["total_price"]}', '{$data["user_id"]}') ";
         
        mysql_query("SET NAMES 'utf8'");
		$query = mysql_query($this->sql);
        if ($query) {
            return mysql_insert_id();
        } else {
            return false;
        }
    }
       public function deleteSell($condition) {
        $this->sql = "DELETE FROM tb_sell WHERE {$condition}";
        mysql_query("SET NAMES 'utf8'");
		$query = mysql_query($this->sql);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
     public function deleteOrder($condition) {
        $this->sql = "DELETE FROM tb_order WHERE {$condition}";
        mysql_query("SET NAMES 'utf8'");
		$query = mysql_query($this->sql);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}
