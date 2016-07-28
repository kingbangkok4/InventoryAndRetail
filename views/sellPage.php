<?php
include "./model/product.php";
include "./model/customer.php";
$obj = new Customer();
$obj2 = new Product();
$obj3 = new Customer();
$obj4 = new Product();
$obj->sql = "select * from tb_customer";
$obj2->sql = "select * from tb_Product";
$rows3 = $obj3->read(" id= {$_REQUEST["id"]} ");
if ($rows3 != false) {
		$row3 = $rows3[0];
	}
 $rows4 = $obj4->read("id= {$_REQUEST["idProduct"]} ");
if ($rows4 != false) {
		//$row4 = $rows4;
                
                if(!empty($_SESSION['rows4'])){
                    //$index = count($_SESSION["rows4"]);
                     foreach ($rows4 as $row) {
                        $_SESSION["rows4"][] = $row;
                     }
                    //$rows4 = $_SESSION["rows4"];    
                   // echo $index;
                }else{
                   foreach ($rows4 as $row) {
                        $_SESSION["rows4"][] = $row;
                     }
                }
	}


//$rows = $obj->read();
   if($_REQUEST["isClear"] == "1"){
       if (isset($_SESSION['rows4']))
        {
            unset($_SESSION['rows4']);
        }     
   }
 
       unset($_SESSION['rows4'][$_REQUEST["idProductClear"]]);
   
        
   

 
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
             $(document).ready(function() {
                $('#tableData2').paging({limit:10});
            });
              $(document).ready(function() {
                $('#tableData3').paging({limit:10});
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
.paging-nav,
#tableData2 {
  
  margin: 0 auto;
 

  .paging-nav,
#tableData3 {
  
  margin: 0 auto;
 
}
</style>


<script>
   
    function myFunction2() {
      <?php
 
       // $rows = $obj->search($_GET['name'] );
    
   $rows2 = $obj2->read();
     

    ?>}
    function myFunction() {
      <?php
        $u="a".$_GET["name"];
       // $rows = $obj->search($_GET['name'] );
          $a="ssss";
       $rows = $obj->search($_GET["name"]);
     

    ?>
     
            
    //document.getElementById("id").innerHTML =<? = $row["id"] ?>;
  /// document.getElementById("name").innerHTML =<?= $row["name"] ?>;
   // document.getElementById("email").innerHTML =<?= $row["email"] ?>;
  //  document.getElementById("mobile").innerHTML =<?= $row["mobile"] ?>;
   // document.getElementById("address").innerHTML =<?= $row["address"] ?>;
    // document.getElementById("line").innerHTML =<?= $row["line"] ?>;
        
    }
           

</script>
<?php echo count($_SESSION['rows4']);

?>

<div class="container">
    
    <?php if ($rows3 != false) { ?>
     <input type="text"  id="searchName" name="searchName" value="<?= $row3["name"] ?>"  class="form-control" required="" style="width:300px; display:inline-block;" />
    <input type="text"  id="searchName" name="searchID" value="<?= $row3["id"] ?>"  class="form-control" required="" style="width:300px;display:inline-block;display: none;" />
  <!-- Trigger the modal with a button -->
    <?php } else{?>
         <input type="text"  id="searchName" name="searchName"  class="form-control" required="" style="width:300px;display:inline-block;" />
    <?php }?>
  <button type="button"  name="submit" value="send" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="display:inline-block;">ค้นหาลูกค้า </button>
   
 
    </br>
   
   
     
    
   
  
  <!-- Trigger the modal with a button -->
 
  <button type="button"  name="submit" value="send" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">ค้นหาสินค้า </button>
   
  <!-- Modal -->
  
  
  
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <table id="tableData" class="table table-bordered table-hover" style="font-size:12px;">
            <thead >
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
            <tbody >
    
             <?php
                if ($rows != false) {
                    $count = 1;
                    foreach ($rows as $row) {
                        ?>     
               <tr>
                   <!--
                           <td  ><p id="id"> </p></td>
                            <td ><p id="name"> </p></td>
                            <td  ><p id="email"> </p></td>
                            <td ><p id="mobile"> </p></td>
                            <td><p id="address"> </p></td>
                            <td  ><p id="line"> </p></td>  
                            <td></td>  
                        -->
                        <td class="text-center"> <?= $row["id"] ?></td>
                            <td class="text-center"><?= $row["name"] ?></td>
                            <td class="text-center"><?= $row["email"] ?></td>
                            <td class="text-center"><?= $row["mobile"] ?></td>
                            <td class="text-center"><?= $row["address"] ?></td>
                            <td class="text-center"><?= $row["line"] ?></td>  
                            <td class="text-center"><a href="index.php?viewName=sellPage&id=<?= $row["id"] ?>&idProduct=<?= $row2["id"] ?>&idProductClear=-1&isClear=" class="btn btn-sm btn-success fa">
											เลือก
                                </a></td>
               </tr> 
                     <?php
                    }
                }
                ?>
             
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  
   <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal2</h4>
        </div>
        <div class="modal-body">
          <table id="tableData2" class="table table-bordered table-hover" style="font-size:12px;">
            <thead >
                <tr class="success">
                    <th class="text-center">รหัส</th>
                    <th class="text-center">รหัสสินค้า</th>
                    <th class="text-center">ชื่อสินค้า</th>
                    <th class="text-center">ราคา</th>
                    <th class="text-center">จำนวน</th>
                    <th class="text-center">quantity</th>     			
                    <th class="text-center">เลือก</th>
                   
                </tr>
            </thead>
            <tbody>
    
             <?php
                if ($rows2 != false) {                   
                    $count2 = 1;
                    foreach ($rows2 as $row2) {
                        ?>     
               <tr>
                   <!--
                           <td  ><p id="id"> </p></td>
                            <td ><p id="name"> </p></td>
                            <td  ><p id="email"> </p></td>
                            <td ><p id="mobile"> </p></td>
                            <td><p id="address"> </p></td>
                            <td  ><p id="line"> </p></td>  
                            <td></td>  
                        -->
                        <td class="text-center"> <?= $row2["id"] ?></td>
                        <td class="text-center"> <?= $row2["product_id"] ?></td>
                        <td class="text-center"> <?= $row2["product_name"] ?></td>
                        <td class="text-center"> <?= $row2["product_price"] ?></td>
                        <td class="text-center"> <?= $row2["product_unit"] ?></td>
                        <td class="text-center"> <?= $row2["quantity"] ?></td>
                         <td class="text-center"><a href="index.php?viewName=sellPage&id=<?= $row["id"] ?>&idProduct=<?= $row2["id"] ?>&idProductClear=-1&isClear=" class="btn btn-sm btn-success" >
											เลือก
                                </a></td>
               </tr> 
                     <?php
                    }
                }
               
                ?>
             
            </tbody>
          </table>
        </div><?=$total=0;?>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <form action="doAddSellList.php" method="post" class="form form-horizontal" style="font-size:12px;">
    <table id="tableData3" class="table table-bordered table-hover" style="font-size:12px;">
            <thead >
                <tr class="success">
                    <th class="text-center">ลำดับ</th>
                    <th class="text-center">รหัส</th>
                    <th class="text-center">รหัสสินค้า</th>
                    <th class="text-center">ชื่อสินค้า</th>
                    <th class="text-center">ราคา</th>
                    <th class="text-center">จำนวน</th>   			
                    <th class="text-center">ลบ</th>
                   
                </tr>
            </thead>
            <tbody id="sellData">
                     <?php
                 
                if (!empty($_SESSION["rows4"])) {
                    $count4 = 0;
                    foreach ($_SESSION["rows4"] as $i => $row4) {
                     
                          //foreach ($rows4 as $row4) {
                        /*if( $_SESSION["rows4"][$int]==NULL ){
                            while( $_SESSION["rows4"][$int]==NULL ){
                                 $int=$int+1;
                            }
                            
                        }*/
                       ?> 
               <tr>       <td class="text-center"> <?=$count4 ?></td>
                         <td class="text-center" id=""> <?= $row4["id"] ?></td>
                         <td class="text-center"  id="product_id"> <?= $row4["product_id"] ?></td>
                          <td class="text-center"  id="product_name"> <?= $row4["product_name"] ?></td>
                            <td class="text-center" id="product_price" ><?= $row4["product_price"] ?></td>
                            <td class="text-center"  ><input  type="number" id="qty" name="qty" value="1" /></td>
                            <td class="text-center"  >  <a href="index.php?viewName=sellPage&id=<?= $row["id"] ?>&idProduct=&idProductClear=<?=$i ?>&isClear=" class="btn btn-sm btn-danger">
                                                                                         ลบ
                                </a> </td>
               </tr>
                     <?php
                     $count4 +=1;
                     $total += $row4["product_price"];
                    }
                 
                }
                ?>
            </tbody>
          </table>
     
           <br>

         <lable id="total_price" class="label label-success pull-right"><h6>ยอดรวม:<?=$total?></h6> </lable>
           <br>
           <br>
           <button type="submit" class="btn btn-primary center-block">
							ยืนยัน
	   </button>
      </form>
</div>