<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('breadcrumb.php');?>
<link rel="stylesheet" type="text/css" href="css/style-select.css">
<div class="container">
<div class="columns flex-space-between">
	<h2>New Receipt</h2>
	<div class="h6">Receipt number</div>
               
              
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
<input class="form-input" id="input-date" type="date"  placeholder="Receipt date">  
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
<div id="cust_panel">
<div class="columns">
<div class="form-group column  col-3 ">
  <input class="form-input" type="text" id="input-example-1" placeholder="Monthly">
</div>
<div class="form-group column  col-3 ">
  <input class="form-input" type="text" id="input-example-1" placeholder="Missionary">
</div>
<div class="form-group column  col-3 ">
  <input class="form-input" type="text" id="input-example-1" placeholder="Rice">
</div>
<div class="form-group column  col-3 ">
  <input class="form-input" type="text" id="input-example-1" placeholder="Nerchai">
</div>
</div>
<div class="columns">
<div class="form-group column  col-6 ">
<textarea class="form-input" id="input-example-20" placeholder="Comments" rows="3" ></textarea>
</div>
<div class="form-group column  col-6 ">
<input type="submit" class="btn btn-primary" name="" value="Submit">
</div>
</div>
                <!-- </form> -->
</div>
</div> <!-- cust panel--->
<div class="column col-3 col-xs-12">
                <div class="panel">
                  <div class="panel-header text-center">
                    <figure class="avatar avatar-lg"><img src="https://picturepan2.github.io/spectre/img/avatar-2.png" alt="Avatar"></figure>
                    <div class="panel-title h5 mt-10">Family head  <i class="ml-2 icon icon-edit"></i></div>
					<div class="panel-subtitle">Family id</div>
					<div class="panel-subtitle">Place</div>
				  </div>
				  <div class="divider"></div>
                  <!-- <nav class="panel-nav">
                    <ul class="tab tab-block">
                      <li class="tab-item active"><a href="#panels">Profile</a></li>
                      <li class="tab-item"><a href="#panels">Files</a></li>
                      <li class="tab-item"><a href="#panels">Tasks</a></li>
                    </ul>
                  </nav> -->
                  <div class="panel-body">
                    <div class="tile tile-centered mt-2">
                      <div class="tile-content">
                        <div class="tile-title text-bold">
						<div class="form-group">
  <label class="form-radio form-inline">
    <input type="radio" name="gender" checked=""><i class="form-icon"></i> Family Member
  </label>
</div>

					
					</div>
                        
                      </div>
                      
                    </div>
                    <div class="tile tile-centered mt-2">
                      <div class="tile-content">
                        <div class="tile-title text-bold">
						<div class="form-group">
  <label class="form-radio form-inline">
    <input type="radio" name="gender" checked=""><i class="form-icon"></i> Family Member
  </label>
</div>
						</div>
                        
                      </div>
                    
                    </div>
                    <div class="tile tile-centered mt-2">
                      <div class="tile-content">
                        <div class="tile-title text-bold">
						<div class="form-group">
  <label class="form-radio form-inline">
    <input type="radio" name="gender" checked=""><i class="form-icon"></i> Family Member
  </label>
</div>
						</div>
                       
                      </div>
                    
                    </div>
                  </div>
                  <!-- <div class="panel-footer">
                    <button class="btn btn-primary btn-block">Save</button>
                  </div> -->
                </div>
              </div>

</div>
</div>
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