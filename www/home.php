
 <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" charset="utf-8"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/spectre.css" charset="utf-8"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/spectre-exp.css" charset="utf-8"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/spectre-icons.css" charset="utf-8"/>
      <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
      <script language="JavaScript" src="js/tamil.js" type="text/JavaScript"></script>
      <script type="text/javascript">
       
    </script>


<div class="off-canvas off-canvas-sidebar-show">
  <!-- off-screen toggle button -->
  <a class="off-canvas-toggle btn btn-primary btn-action" href="#sidebar-id">
    <i class="icon icon-menu"></i>
  </a>

  <div id="sidebar-id" class="off-canvas-sidebar">
    <!-- off-screen sidebar -->
  </div>

  <a class="off-canvas-overlay" href="#close"></a>

  <div class="off-canvas-content">
    <!-- off-screen content -->
    <?php
session_start();
echo "Welcome ". $_SESSION['usrname'];


?>
    <ul>
<li><a href="data_entry.php">Make Entry  </a></li>
<li><a href="add_family.php">Add Family</a></li>
<li><a href="list_family.php">Family List</a></li>
<li><a href="index.php">Logout</a></li>
</ul>
  </div>
</div>