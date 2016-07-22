<?php
class Customer {

    public $sql;

    public function insert($data) {
       $this->sql = "INSERT INTO tb_customer ( `name`, `mobile`, `email`, `address`, `line`) VALUES ( '{$data["name"]}', '{$data["mobile"]}', '{$data["email"]}', '{$data["address"]}', '{$data["line"]}') ";
         
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
   // public function update($data, $user_ref) {
    //    $this->sql = "UPDATE tb_customer SET name = '{$data["name"]}', mobile = '{$data["mobile"]}', email = '{$data["email"]}', address='{$data["address"]}', line = '{$data["line"]}'  WHERE user_ref = {$user_ref}";
  //      mysql_query("SET NAMES 'utf8'");
//		$query = mysql_query($this->sql);
        
    //    if ($query){		
     //           return true;
   //     } else {
    //        return false;
    //    }
  //  }
    
     public function update($data, $condition) {
        $this->sql = "UPDATE tb_customer SET  name = '{$data["name"]}', mobile = '{$data["mobile"]}', email='{$data["email"]}', address='{$data["address"]}', line='{$data["line"]}' WHERE {$condition}";
        mysql_query("SET NAMES 'utf8'");
		$query = mysql_query($this->sql);
        
        if ($query) {
			return true;
        } else {
            return false;
        }
    }
    
   public function read($condition = " 1=1") {
        $this->sql = " SELECT * FROM `tb_customer` WHERE {$condition}";
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
     public function search($condition ) {
        $this->sql = " SELECT * FROM `tb_customer` WHERE name LIKE'%$condition%'";
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