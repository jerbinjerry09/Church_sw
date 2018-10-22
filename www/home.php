<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
    <!-- off-screen content -->
    <h1>
    <?php
        echo "Welcome ". $_SESSION['usrname'];
?>
</h1>
<!-- <?php include('breadcrumb.php'); ?> -->
<div class="columns">
    <div class="column col-xs-4"><div class="card">
 
  <div class="card-header">
    <div class="card-title h5">Accounts</div>
    <div class="card-subtitle text-gray">Receipt</div>
  </div>
  <div class="card-body">
  </div>
  <div class="card-footer">
    <button class="btn btn-primary">Enter</button>
  </div>
</div></div>
    <div class="column col-xs-4">
    <div class="card">
  
  <div class="card-header">
    <div class="card-title h5">Family</div>
    <div class="card-subtitle text-gray">Listing, Search</div>
  </div>
  <div class="card-body">
  </div>
  <div class="card-footer">
    <button class="btn btn-primary">Enter</button>
  </div>
</div>
    </div>
    <div class="column col-xs-4">
    <div class="card">
 
  <div class="card-header">
    <div class="card-title h5">Reports</div>
    <div class="card-subtitle text-gray">Individual reports, aggregate reports</div>
  </div>
  <div class="card-body">
  </div>
  <div class="card-footer">
    <button class="btn btn-primary">Enter</button>
  </div>
</div>
    </div>
  </div>
    <ul>
<li><a href="data_entry.php">Make Entry  </a></li>
<li><a href="add_family.php">Add Family</a></li>
<li><a href="list_family.php">Family List</a></li>
<li><a href="index.php">Logout</a></li>
</ul>

<?php include('footer.php'); ?>