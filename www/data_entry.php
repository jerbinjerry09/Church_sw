<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('breadcrumb.php');?>
<link rel="stylesheet" type="text/css" href="css/style-select.css">
<div class="container">
<div class="columns flex-space-between">
	<h2>New Receipt</h2>
	<div class="h6">Receipt number:<span id="receipt_no"></span></div>
               
              
</div>
<div class="columns">
<div class="column col-9 col-xs-12">
<!-- <form class="form" action="test.php" method="get"> -->
				<!-- form input control -->
				<div class="columns">
<div class="form-group column  col-3 ">
  <input class="form-input" type="text" id="input-barcode" placeholder="Enter barcode">
</div>
<div class="form-group column  col-3 ">
<input class="form-input" id="receipt_date" type="date"  placeholder="Receipt date">  
<p class="form-input-hint">Receipt Date</p>
</div>
<div class="form-group column  col-3">
      <select class="form-select chosen" id="cat" name="cat">
        <option value="0">Select one category</option>
        <?php echo getCategoryList(); ?>
      </select>
	</div>
	<div class="form-group column  col-3">
      <select class="form-select chosen" id="f_id" name="family_head">
         <option value="0">Select Family</option>
        <?php echo getFamilyList(); ?>
      </select>
    </div>
</div>


<!--=========== Hidden Variables ===========-->
<input type="hidden" name="category_id" id="category_id">
<input type="hidden" name="member_id" id="member_id">
<input type="hidden" id="family_id" name="family_id">



<div id="loader" class="receipt_panel">
<img src="img/loader.gif" height="200" width="200" class="center">
</div>
<div id="default_panel" class="receipt_panel">
  <div class="h6"><span id="receipt_title">Default Receipt</span></div>
<div class="columns">
<div class="form-group column  col-3 ">
  <input class="form-input clear" type="number" id="monthly_amt" placeholder="Monthly">
</div>
<div class="form-group column  col-3 ">
  <input class="form-input clear" type="number" id="msnry_amt" placeholder="Missionary">
</div>
<div class="form-group column  col-3 ">
  <input class="form-input clear" type="number" id="rice_amt" placeholder="Rice">
</div>
<!-- <div class="form-group column  col-3 ">
  <input class="form-input" type="number" id="nerchai-amt" placeholder="Nerchai">
</div> -->
</div>
<div class="columns">
<div class="form-group column  col-3 ">
<textarea class="form-input clear" id="monthly_desc" placeholder="Comments" rows="3" ></textarea>
</div>
<div class="form-group column  col-3 ">
<textarea class="form-input clear" id="msnry_desc" placeholder="Comments" rows="3" ></textarea>
</div>
<div class="form-group column  col-3 ">
<textarea class="form-input clear" id="rice_desc" placeholder="Comments" rows="3" ></textarea>
</div>
<!-- <div class="form-group column  col-3 ">
<textarea class="form-input" id="nerchai-desc" placeholder="Comments" rows="3" ></textarea>
</div> -->
<div class="form-group column  col-2 ">
<input type="button" id="default_submit" class="btn btn-primary" name="" value="Submit">
</div>
</div>
                <!-- </form> -->
</div>
<div id="common_panel" class="receipt_panel">
  <div class="h6"><span id="receipt_title">Receipt Title</span></div>
<div class="columns">
<div class="form-group column  col-6 ">
  <input class="form-input clear" type="text" id="common_amt" placeholder="Monthly">
</div>

<div class="form-group column  col-4 ">
<textarea class="form-input clear" id="common_desc" placeholder="Comments" rows="3" ></textarea>
</div>
<div class="form-group column  col-2 ">
<input type="button" id="common_submit" class="btn btn-primary" name="" value="Submit">
</div>
</div>
                <!-- </form> -->
</div>
<div id="bday_panel" class="receipt_panel">
  <div class="h6"><span id="receipt_title">Birthday Receipt</span></div>
<div class="columns">
<div class="form-group column  col-6 ">
  <input class="form-input clear" type="text" id="bday_amt" placeholder="Amount">
</div>
<div class="form-group column  col-4 ">
<textarea class="form-input clear" id="bday_desc" placeholder="Comments" rows="3" ></textarea>
</div>
<div class="form-group column  col-2 ">
<input type="button" id="bday_submit" class="btn btn-primary" name="" value="Submit">
</div>
</div>
                <!-- </form> -->
</div>
<div id="test">
</div>
<div id="receipt_list" class="receipt_panel">
<table>
  <thead>
  <tr>
    <th>Receipt #</th>
    <th>Family Head</th>
    <th>Category</th>
    <th>Amount</th>
    <th>Description</th>
  </tr>
</thead>
  <tbody id="last_receipt">
    <?php
    include('db_info.php');
$i=1;
$results = $db->query("SELECT family_id,place,family_head from family_list ");
while ($row = $results->fetchArray()) {
  ?>
<tr>
  <td></td><td></td><td></td><td></td>
</tr>
  <?php

}

    ?>
  </tbody>
</table>

  </div>

</div> <!-- cust panel--->
<div class="column col-3 col-xs-12">
                <div class="panel">
                  <div class="panel-header text-center">
                    <figure class="avatar avatar-lg"><img src="https://picturepan2.github.io/spectre/img/avatar-2.png" alt="Avatar"></figure>
                    <div class="panel-title h5 mt-10" id="family_head_title">CSI Church  <!-- <i class="ml-2 icon icon-edit"></i> --></div>
					<div class="panel-subtitle" id="family_id_title">CH001</div>
					<div class="panel-subtitle" id="family_place_title">Muzhucode</div>
				  </div>
				  <div class="divider"></div>
                  <!-- <nav class="panel-nav">
                    <ul class="tab tab-block">
                      <li class="tab-item active"><a href="#panels">Profile</a></li>
                      <li class="tab-item"><a href="#panels">Files</a></li>
                      <li class="tab-item"><a href="#panels">Tasks</a></li>
                    </ul>
                  </nav> -->
                  <div class="panel-body " id="member_list">
                    
                    
                    
                  </div>
                  <!-- <div class="panel-footer">
                    <button class="btn btn-primary btn-block">Save</button>
                  </div> -->
                </div>
              </div>

</div>
</div>
<script type="text/javascript">
   var date = new Date();
    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();

    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;

    var today = year + "-" + month + "-" + day;
    document.getElementById('receipt_date').value = today;
</script>
<?php
include('footer.php');
?>
<?php
function getFamilyList()
{
  class MyDB1 extends SQLite3{
    function __construct()
    {
        $this->open('../church.db');
    }
}
  $db1 = new MyDB1();

  $results = $db1->query("SELECT distinct family_id,family_head from family_list ");
  $op='';
  while ($row = $results->fetchArray()) {
    $op.= '<option value="'.$row['family_id'].'">'.$row['family_head'].'</option>';
}
$db1->close();
return $op;

}

function getCategoryList()
{
  class MyDB2 extends SQLite3{
    function __construct()
    {
        $this->open('../church.db');
    }
}
  $db2 = new MyDB2();

  $results = $db2->query("SELECT distinct id,cat_name from category ");
  $op1='';
  while ($row = $results->fetchArray()) {
    $op1.= '<option value="'.$row['id'].'">'.$row['cat_name'].'</option>';
}
$db2->close();
return $op1;

}


 ?>


