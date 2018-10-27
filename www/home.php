<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
    <!-- off-screen content -->
    <h1>
    <?php
        echo "Welcome ". $_SESSION['username'];
?>
</h1>
<!-- <?php include('breadcrumb.php'); ?> -->
<div class="columns dashboard">
    <div class="column col-xs-3">
        <div class="card bg-primary">
 
  <div class="card-header">
    <div class="card-title h2">Rs. 1,20,000</div>
    <div class="card-subtitle text-gray">Receipt</div>
  </div>
  
</div></div>
<div class="column col-xs-3">
        <div class="card bg-primary">
 
  <div class="card-header">
    <div class="card-title h2">Rs. 1,20,000</div>
    <div class="card-subtitle text-gray">Receipt</div>
  </div>
  
</div></div>
    <div class="column col-xs-3">
    <div class="card bg-primary">
  
  <div class="card-header">
  <div class="card-title h2">Rs. 1,20,000</div>
    <div class="card-subtitle text-gray">Receipt</div>
  </div>
  
  
</div>
    </div>
    <div class="column col-xs-3">
    <div class="card bg-primary">
 
  <div class="card-header">
  <div class="card-title h2">Rs. 1,20,000</div>
    <div class="card-subtitle text-gray">Receipt</div>
  </div>
  
</div>
    </div>
  </div>
<div class="columns mt-20 dashboard">
    <div class="column col-xs-3"><div class="card">
 
  <div class="card-header">
  <i class="icon icon-4x icon-flag"></i>
    <div class="card-title h5"> Accounts</div>
    <div class="card-subtitle text-gray">Receipt</div>
  </div>
  
</div></div>
    <div class="column col-xs-3">
    <div class="card">
  
  <div class="card-header">
  <i class="icon icon-4x icon-mail"></i>
    <div class="card-title h5">Family</div>
    <div class="card-subtitle text-gray">Listing, Search</div>
  </div>
 
</div>
    </div>
    <div class="column col-xs-3">
    <div class="card">
  
  <div class="card-header">
  <i class="icon icon-4x icon-apps"></i>
    <div class="card-title h5">Settings</div>
    <div class="card-subtitle text-gray">Listing, Search</div>
  </div>
 
</div>
    </div>
    <div class="column col-xs-3">
    <div class="card">
 
  <div class="card-header">
  <i class="icon icon-4x icon-bookmark"></i>
    <div class="card-title h5">Reports</div>
    <div class="card-subtitle text-gray">Individual reports, aggregate reports</div>
  </div>

</div>
    </div>
  </div>
   

<?php include('footer.php'); ?>