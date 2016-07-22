<?php
header('Content-Type: text/html; charset=utf-8');
include "./model/customer.php";
$obj = new Customer();
$rows = $obj->read(" id= {$_REQUEST["id"]} ");
if ($rows != false) {
		$row = $rows[0];
	}
	
include "./model/product.php";
$obj2 = new Product();
$rows2 = $obj2->read();
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="paging.js"></script> 
<script type="text/javascript">
            $(document).ready(function() {
                $('#tableData').paging({limit:5});
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
<div class="container">
    <form>
        <fieldset>
            <legend>
                ขายให้: <?= $row["name"] ?>
            </legend>
            <div class="table-responsive">
                 <table id="tableData" class="table table-bordered table-hover" style="font-size:10px;">
                    <thead>
                         <tr class="success">
                             <th class="text-center">ลำดับ</th>
                             <th class="text-center">รหัสสินค้า</th>
                              <th class="text-center">ชื่อสินค้า</th>                   
                              <th class="text-center">จำนวน</th>
                             <th class="text-center">จำนวนขั้นต่ำ</th>
                               <th class="text-center">หน่วยนับ</th>
				<th class="text-center">ราคาซื้อ(บาท)</th>
                                <th class="text-center">ราคาขาย(บาท)</th>
                                <th class="text-center">วันที่</th>
				<th class="text-center">สินค้าใกล้หมด</th>
                                <th class="text-center">จำนวนที่ซื้อ</th>
                                <th class="text-center">ขายสินค้า</th>
				
                </tr>
            </thead>
            <tbody>
                <?php
                if ($rows2 != false) {
                    $count = 1;
                    foreach ($rows2 as $row2) {
                        ?>
                        <tr>
                            <td class="text-center"><?= $count++; ?></td>
                            <td class="text-center"><?= $row2["product_id"] ?></td>
                            <td class="text-center"><?= $row2["product_name"] ?></td>                          
                            <td class="text-right"><?= number_format($row2["quantity"]) ?></td>
                            <td class="text-right"><?= number_format($row2["low_quantity"]) ?></td>
							<td class="text-center"><?= $row2["product_unit"] ?></td>
							<td class="text-right"><?= number_format($row2["product_cost"]) ?> บาท</td>	
                            <td class="text-right"><?= number_format($row2["product_price"]) ?> บาท</td>							
                            <td class="text-center"><?= $row2["timestamp"] ?></td>
							<td class="text-center">
								<?php if ($row2["quantity"] <= $row2["low_quantity"]){ 
									echo ('<img src="images/trouble.png" alt="Smiley face" height="30" width="30">');
								 }?>									
							</td>
			    <td>			<input type="number"/></td>
                            <td>
                                <a href="index.php?viewName=editProduct&id=<?= $row2["id"] ?>" class="btn btn-sm btn-success">
									ขายสินค้า
                                </a>
                                <!-- <a onclick="return confirm('ยืนยันการลบสินค้า')" href="deleteProduct.php?id=<?= $row2["id"] ?>" class="btn btn-sm btn-danger">
                                                                                            ลบ
                                </a> -->
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
        </fieldset>
    </form>
    
    <form>
    <fieldset>
            <legend>
                รายการสินค้าที่ซื้อของ: <?= $row["name"] ?>
            </legend>
    </fieldset>
        <div class="table-responsive">
             <table class="table table-bordered table-hover" style="font-size:10px;">
                <thead>
                         <tr class="success">
                             <th class="text-center">ลำดับ</th>
                             <th class="text-center">รหัสสินค้า</th>
                              <th class="text-center">ชื่อสินค้า</th>                   
                              <th class="text-center">จำนวน</th>
                            
				
                </tr>
            </thead>
            <tbody>
                
            </tbody>
     </form> 
</div>
