<?php
header('Content-Type: text/html; charset=utf-8');
include "./model/employee.php";
$obj = new Employee();
$obj->sql = "select * from tb_employee";
$rows = $obj->read();
//var_dump($rows);
?>

 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="paging.js"></script> 
<script type="text/javascript">
            $(document).ready(function() {
                $('#tableData').paging({limit:10});
            });
        </script>
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

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
    <h3><label class="label label-warning">ข้อมูลตัวแทน</label></h3>
    <br /><br>
    <div class="col-md-12 pull-right">
    	<a href="index.php?viewName=add_user" class="btn  btn-sm btn-primary pull-right">เพิ่มตัวแทน</a>
    </div>
    <br /><br>
    <div class="table-responsive">
        <table id="tableData"class="table table-bordered table-hover" style="font-size:12px;">
            <thead>
                <tr class="success">
                    <th class="text-center">รหัสตัวแทน</th>
					<th class="text-center">คำนำหน้า</th>
                    <th class="text-center">ชื่อตัวแทน</th>
                    <th class="text-center">อีเมล์</th>
                    <th class="text-center">เบอร์โทร</th>
                    <th class="text-center">ที่อยู่</th>     
 					<th class="text-center">จังหวัด</th>   					
					<th class="text-center">ประเภท</th>
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
							<td class="text-center"><?= $row["title"] ?></td>
                            <td class="text-center"><?= $row["fullname"] ?></td>
                            <td class="text-center"><?= $row["email"] ?></td>
                            <td class="text-center"><?= $row["mobile"] ?></td>
                            <td class="text-center"><?= $row["address"] ?></td>         
							<td class="text-center"><?= $row["province"] ?></td>							
							<td class="text-center">
							<?php if($row["type"] <> "Admin") {?>
								<form action="doUpdateType.php" method="post" class="form-horizontal" onsubmit="return confirm('ยืนยันการเปลี่ยนแปลงสมาชิก?');" >				    
									<select id="type" name="type">							  
									  <option <?php if ($row["type"] == "สมาชิก" ) echo 'selected' ; ?> value="สมาชิก">สมาชิก</option>
									  <option <?php if ($row["type"] == "ไม่เป็นสมาชิกแล้ว" ) echo 'selected' ; ?> value="ไม่เป็นสมาชิกแล้ว">ไม่เป็นสมาชิกแล้ว</option>
									</select> 
									<input type="hidden" id="id" name="id" value="<?= $row["user_ref"] ?>"> 
									<input class="btn btn-sm btn-primary" type="submit" value="ดำเนินการ" />
								</form>
							<?php } else { echo $row["type"]; } ?>
							</td>
                            <td class="text-center">
                                <a href="index.php?viewName=editEmployee&id=<?= $row["id"] ?>&user_ref=<?= $row["user_ref"] ?>" class="btn btn-sm btn-success">
											แก้ไข
                                </a>
								<?php if($row["type"] <> "Admin") {?>
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