<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('breadcrumb.php');?>

<div class="container">
<div class="columns flex-space-between">
	<h2>New Receipt</h2>
	<div class="h6">Receipt number</div>
               
              
</div>
<div class="columns">
<div class="column col-9 col-xs-12">
<form class="form" action="#forms">
				<!-- form input control -->
				<div class="columns">
<div class="form-group column  col-3 ">
  <input class="form-input" type="text" id="input-example-1" placeholder="Enter barcode">
</div>
<div class="form-group column  col-3 ">
<input class="form-input" id="input-example-14" type="date"  placeholder="Receipt date">  
<p class="form-input-hint">Receipt Date</p>
</div>
<div class="form-group column  col-3">
      <select class="form-select" >
        <option>Select Category</option>
        <option>Slack</option>
        <option>Skype</option>
        <option>Hipchat</option>
      </select>
	</div>
	<div class="form-group column  col-3">
      <select class="form-select" >
        <option>Select Name</option>
        <option>Slack</option>
        <option>Skype</option>
        <option>Hipchat</option>
      </select>
    </div>
</div>
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
                </form>
</div>
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