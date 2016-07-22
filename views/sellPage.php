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


<script>
    function myFunction() {
      <?php
   
        $rows = $obj->search($_GET["name"] );
       
    ?>
      
    //document.getElementById("id").innerHTML =<? = $row["id"] ?>;
  /// document.getElementById("name").innerHTML =<?= $row["name"] ?>;
   // document.getElementById("email").innerHTML =<?= $row["email"] ?>;
  //  document.getElementById("mobile").innerHTML =<?= $row["mobile"] ?>;
   // document.getElementById("address").innerHTML =<?= $row["address"] ?>;
    // document.getElementById("line").innerHTML =<?= $row["line"] ?>;
        
    }
           

</script>

<div class="container">
    <input type="text" name="name">
     <input type="text"  id="searchName" name="searchName"  class="form-control" required="" style="width:300px;" />
  
  <!-- Trigger the modal with a button -->
  <button type="button" onclick="myFunction()" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Large Modal</button>

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
</div>