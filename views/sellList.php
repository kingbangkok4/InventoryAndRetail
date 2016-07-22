<?php

include "./model/customer.php";
$obj = new Customer();
$obj->sql = "select * from tb_customer";
//$rows = $obj->read();

?>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="paging.js"></script> 
<script type="text/javascript">
            $(document).ready(function() {
                $('#tableData').paging({limit:10});
            });
        </script>
      
  <style type="text/css">

.paging-nav {
  text-align: right;
  padding-top: 2px;
}

.paging-nav a {
  margin: auto 1px;
  text-decoration: none;
  display: inline-block;
  padding: 1px 7px;
  background: #91b9e6;
  color: white;
  border-radius: 3px;
}

.paging-nav .selected-page {
  background: #187ed5;
  font-weight: bold;
}

.paging-nav,
#tableData {
  
  margin: 0 auto;
 
}
</style>
<?php
        $rows = $obj->search($_REQUEST["searchName"]);
?>

<div class="container">
    <h3><label class="label label-warning">เลือกข้อมูลลูกค้า</label></h3>
    <br /><br>
    <form action="?viewName=sellList" method="post" class="form form-horizontal" style="font-size:12px;">
        <div class="col-md-12 pull-right">     
            <input type="submit" class="btn btn-sm btn-primary pull-right" value="ค้นหา"></input>
            <input type="text" id="searchName" name="searchName" value="" class="form-control" required="" style="width:300px;" />
        </div>
    </form>
    <br /><br>
    <div class="table-responsive">
        <table id="tableData" class="table table-bordered table-hover" style="font-size:12px;">
            <thead>
                <tr class="success">
                    <th class="text-center">รหัสลูกค้า</th>
                    <th class="text-center">ชื่อลูกค้า</th>
                    <th class="text-center">อีเมล์</th>
                    <th class="text-center">เบอร์โทร</th>
                    <th class="text-center">ที่อยู่</th>     			
                    <th class="text-center">line</th>
                    <th class="text-center">ดำเนินการ</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($rows != false) {
                    $count = 1;
                    foreach ($rows as $row) {
                        ?>
                        <tr>
                            <td class="text-center"> <?= $row["id"] ?></td>
                            <td class="text-center"><?= $row["name"] ?></td>
                            <td class="text-center"><?= $row["email"] ?></td>
                            <td class="text-center"><?= $row["mobile"] ?></td>
                            <td class="text-center"><?= $row["address"] ?></td>
                            <td class="text-center"><?= $row["line"] ?></td>   
							
                            <td class="text-center">
                                <a href="index.php?viewName=selectSellProduct&id=<?= $row["id"] ?>" class="btn btn-sm btn-success">
											ขาย
                                </a>
								<!--<?php if($row["type"] <> "Admin") {?> -->
                               <!--  <a onclick="return confirm('ยืนยันการลูกค้า')" href="deleteCustomer.php?id=<?= $row["id"] ?>" class="btn btn-sm btn-danger">
                                                                                            ลบ
                                </a> -->
								<?php } ?>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    
    <select name="users" >
      <?php
                if ($rows != false) {
                    $count = 1;
                    foreach ($rows as $row) {
                        ?>
    <option value=" <?php $row["id"]?>"><?= $row["name"] ?></option>
     <?php
                    }
                }
                ?>
    
    </select>
    
    
</div>
