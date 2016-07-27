<?php

class sell {
    public $sql;

    public function insert($data) {
       $this->sql = "INSERT INTO tb_sell ( `product_id`, `qty`, `sale_id`,`sum_price`) VALUES ( '{$data["product_id"]}', '{$data["qty"]}', '{$data["sale_id"]}', '{$data["sum_price"]}') ";
         
        mysql_query("SET NAMES 'utf8'");
		$query = mysql_query($this->sql);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}
