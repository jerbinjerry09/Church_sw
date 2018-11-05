<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('breadcrumb.php'); ?>
<?php include('db_info.php');  

?>

<div class="container">
<div class="columns search_section">

<div class="column col-4 ">
<div class="form-group">
<label class="form-label">Search by Barcode</label>
  <input class="form-input" type="text" id="input-example-1" placeholder="Search by Barcode">
</div>
</div>
    <div class="column col-4 ">
    <div class="form-group">
    <label class="form-label">Search by name</label>
  <input class="form-input" type="text" id="input-example-1" placeholder="Search by name">
</div>
    </div>
    <div class="column col-4">
    <div class="form-group">
    <label class="form-label">Search by place</label>
  <input class="form-input" type="text" id="input-example-1" placeholder="Search by place">
</div>
    </div>
  </div>
  <div class="divider mb-20" ></div>
  <div class="columns">
<?php
$i=1;
$results = $db->query("SELECT family_id,place,family_head from family_list ");
while ($row = $results->fetchArray()) {
    ?>



    <div class="column col-xs-4 user_individual">
    <div class="tile tile-centered">
  
  
  <div class="tile-content">
    <div class="tile-title"> <figure class="avatar avatar-sm">
  <img src="https://picturepan2.github.io/spectre/img/avatar-2.png" alt="...">
</figure><?php echo $row['family_head']; ?></div>
    <div class="tile-subtitle text-gray"><?php echo $row['place']; ?></div>
    <div class="divider" ></div>
    <div>
<?php
$mem_result = $db->query("SELECT member_name,member_id from family_members where family_id='".$row['family_id']."' ");
while($member = $mem_result->fetchArray())
{
?>

      <span class="chip"><?php echo $member['member_name']; ?></span> 


<?php
}
      ?></div>
  </div>
  <div class="tile-action">
    <a class="btn btn-link" href="edit_family.php?id=<?php echo $row['family_id']; ?>">
    <i class="icon icon-edit"></i>  
    </a>
  </div>
</div></div>



    <?php
    if(($i%3)==0)
    {
      ?>

    </div>
    <div class="columns">

      <?
    }
  $i++;
  }
  ?>

  </div>
</div>

<?php include('footer.php'); ?>