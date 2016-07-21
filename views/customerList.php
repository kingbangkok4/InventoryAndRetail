<?php
header('Content-Type: text/html; charset=utf-8');
include "./model/customer.php";
$obj = new Customer();
$obj->sql = "select * from tb_customer";
$rows = $obj->read();

?>
<div class="container">
    <h3><label class="label label-warning">ข้อมูลลูกค้า</label></h3>
    <br /><br>
    <div class="col-md-12 pull-right">
    	<a href="index.php?viewName=add_customer" class="btn  btn-sm btn-primary pull-right">เพิ่มลูกค้า</a>
    </div>
    <br /><br>
    <div class="table-responsive">
        <table class="table table-bordered table-hover" style="font-size:12px;">
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
                                <a href="index.php?viewName=editCustomer&id=<?= $row["id"] ?>" class="btn btn-sm btn-success">
											แก้ไข
                                </a>
								<!--<?php if($row["type"] <> "Admin") {?> -->
                                <!-- <a onclick="return confirm('ยืนยันการลบตัวแทน')" href="deleteEmployee.php?user_ref=<?= $row["user_ref"] ?>" class="btn btn-sm btn-danger">
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
</div>