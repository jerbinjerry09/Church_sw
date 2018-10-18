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