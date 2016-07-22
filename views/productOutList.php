<?php

include "./model/product.php";
$obj = new Product();
$rows = $obj->read_out();
//var_dump($rows);
?>
<div class="container">
    <h3><label class="label label-warning">รายการเบิกสินค้า</label></h3>
    <br /><br>
    <div class="col-md-12 pull-right">
    	<a href="index.php?viewName=add_product_out&id=&name=" class="btn  btn-sm btn-primary pull-right">เบิกสินค้า</a>
    </div>
    <br /><br>
    <div class="table-responsive">
        <table class="table table-bordered table-hover" style="font-size:12px;">
            <thead>
                <tr class="success">
                	<th class="text-center">ลำดับ</th>
                    <th class="text-center">เลขที่ใบเบิก</th>
                    <th class="text-center">รหัสสินค้า</th>
					<th class="text-center">ชื่อสินค้า</th>					
                    <th class="text-center">จำนวนที่เบิก</th>
					<th class="text-center">หน่วยนับ</th>
					<th class="text-center">ราคา</th>
					<th class="text-center">ราคารวม</th>
                    <th class="text-center">วันที่เบิก</th>
					<th class="text-center">เบิกให้</th>  					
                    <!-- <th class="text-center">ดำเนินการ</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                if ($rows != false) {
                    $count = 1;
                    foreach ($rows as $row) {
                        ?>
                        <tr>
                            <td class="text-center"><?= $count++; ?></td>
                            <td class="text-center"><?= $row["id"] ?></td>
                            <td class="text-center"><?= $row["product_id"] ?></td>
							<td class="text-center"><?= $row["product_name"] ?></td>
                            <td class="text-right"><?= number_format($row["quantity"]) ?></td>        
							<td class="text-center"><?= $row["product_unit"] ?></td>
							<td class="text-right"><?= number_format($row["product_price"]) ?> บาท</td>   
							<td class="text-right"><?= number_format($row["sum_price"]) ?> บาท</td>   							
                            <td class="text-center"><?= $row["productout_date"] ?></td>       
							<td class="text-center"><?= $row["user"] ?></td>   							
                            <!--  <td class="text-center">
                                <a onclick="return confirm('ยืนยันการลบรายการรับสินค้า')" href="deleteProductOut.php?id=<?//= $row["id"] ?>" class="btn btn-sm btn-danger">                                ลบ
                                </a>
                            </td> -->
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>