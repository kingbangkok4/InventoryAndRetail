<?php
include "./model/customer.php";
$obj = new Customer();
$id = $_REQUEST["id"];
$rows = $obj->read(" e.user_ref = {$_REQUEST["user_ref"]} ");
if ($rows != false) {
    $row = $rows[0];
    $users = $obj->get_user(" id = {$_REQUEST["user_ref"]} ");
	$user = $users[0];
	
	$rows_province = $obj->read_province();
}
?>
<script type="text/javascript">
function formatPhone(obj) {
    var numbers = obj.value.replace(/\D/g, ''),
	 char = {};
    //char = {0:'(',3:') ',6:' - '};
    obj.value = '';
    for (var i = 0; i < numbers.length; i++) {
        obj.value += (char[i]||'') + numbers[i];
    }
}
function CheckMobileNumber() {
   var data = $("#mobile").val();
   var msg = 'โปรดกรอกหมายเลขโทรศัพท์ 10 หลัก ไม่ต้องใส่เครื่องหมายขีด (-) วงเล็บหรือเว้นวรรค';
   s = new String(data);
   if ( s.length != 10)
   {
      alert(msg);
      return false;
   }else{
	return true;
   }
}
</script>
 <div class="container">
    <form action="doUpdateEmployee.php" method="post" class="form form-horizontal" style="font-size:12px;"  onsubmit="return CheckMobileNumber()">
        <input type="hidden" name="user_ref" value="<?=$_REQUEST["user_ref"]?>" />		
	

        <fieldset>
            <legend>
                ข้อมูลลูกค้า
            </legend>
			<div class="row">
				<div class="col-md-3">
					
				</div>
					<div class="col-md-3">
					<label style="color:red;">**&nbsp;</label><label>line</label>
					<input type="email" name="line" value="<?= $row["line"] ?>" class="form-control"  required="" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label>ชื่อ-สกุล</label>
					<input type="text" name="name" value="<?= $row["fullname"] ?>" class="form-control" required="" />
				</div>
				<div class="col-md-3">
					<label>เบอร์โทรศัพท์</label>
					<input type="text" id="mobile" name="mobile" value="<?= $row["mobile"] ?>" onblur="formatPhone(this);" maxlength="10" class="form-control"  required="" />
				</div>
				<div class="col-md-3">
					<label>อีเมล์</label>
					<input type="email" name="email" value="<?= $row["email"] ?>" class="form-control"  required="" />
				</div>
				
			</div>			
			<div class="row">
				<div class="col-md-3">
					<label>ที่อยู่</label>
					</textarea>
					<textarea name="address" class="form-control" required=""><?= $row["address"] ?></textarea
				</div>
			</div>
		
			<div class="row">
				<br /><br />
				<div class="col-md-12 center-block">
					<button type="submit" class="btn btn-primary center-block">
						บันทึกข้อมูล
					</button>
				</div>
			</div>
        </fieldset>
    </form>
</div>



