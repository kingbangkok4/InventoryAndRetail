<?php
header('Content-Type: text/html; charset=utf-8');
class Employee {

    public $sql;

    public function insert($data) {
        $this->sql = "INSERT INTO tb_customer (`id`, `fullname`, `mobile`, `email`, `address`, `line`) VALUES (NULL, '{$data["name"]}', '{$data["mobile"]}', '{$data["email"]}', '{$data["address"]}', '{$data["line"]}') ";
        mysql_query("SET NAMES 'utf8'");
		$query = mysql_query($this->sql);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    
    public function delete($condition) {
        $this->sql = "DELETE FROM tb_customer WHERE {$condition}";
        mysql_query("SET NAMES 'utf8'");
		$query = mysql_query($this->sql);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
     public function update($data, $user_ref) {
        $this->sql = "UPDATE tb_customer SET name = '{$data["name"]}', mobile = '{$data["mobile"]}', email = '{$data["email"]}', address='{$data["address"]}', title = '{$data["line"]}'  WHERE user_ref = {$user_ref}";
        mysql_query("SET NAMES 'utf8'");
		$query = mysql_query($this->sql);
        
        if ($query){		
                return true;
        } else {
            return false;
        }
    }
    
   public function read() {
        $this->sql = " SELECT * FROM `tb_customer` ORDER BY name ";
		mysql_query("SET NAMES 'utf8'");
        $query = mysql_query($this->sql);
        if ($query) {
            $result = array();
            while ($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
                $result[] = $row;
            }
            return $result;
        } else {
            return false;
        }
    }
}