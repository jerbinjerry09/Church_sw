<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('breadcrumb.php'); 


include('db_info.php');
$i=1;
$id=$_GET['id'];
$results = $db->query("SELECT * from family_members fm inner join family_list fl on fm.family_id=fl.family_id  where fm.family_id='$id'");




?>
    <a href="home.php">Home </a>
    <script language="javascript">


</script>
<style type="text/css">
    
</style>
<input id="text" type="text"  style="display: none;" placeholder=" Enter something...">


    <form action="controls/add_family_check.php" name="family_form" method="POST" enctype="multipart/form-data">

        <table id="ttable" class="table table-striped table-hover">
            <thead>
                <th></th>
                <th>Member Name</th>
                <th>Tamil Name</th>
                <th>Date of Birth</th>
                <th>Date of Baptism</th>
                <th>Member Type</th>
                <th>Relation</th>
                <th>Gender</th>
                <th>Occupation</th>
                <th>Status</th>                
            </thead>
            <tbody id="tbody">
                <?php
if($results)
{
    $i=1;
while ($row = $results->fetchArray()) {
    $status='';
    $i++;
    $title=$row['title'];
    $ini=$row['ini'];
    $ename=$row['member_name'];
    $tname=$row['m_name_t'];
    $gender=$row['gender'];
    $dob=$row['do_birth'];
    $family_type=$row['family_type'];
    if($row['do_baptism']==='1970-01-01')
    {
        $do_baptism='';
    }
    else{
        $do_baptism=$row['do_baptism'];
    }
    $relation=$row['relation'];
    $occupation=$row['occupation'];
   if($row['status']==='late')
    {  
        $status='Late';

    }
    else{ 
     $status='';
 }
   // echo $row['status'];
   if($row['member_type']==1){   $head='Family Head';}else{  $head='Member';}
?>
            <tr>
                <td><?php echo $i; ?></td>
                
                <td>
                   <span><?php echo $status.' '.$title.' '.$ini.' '.$ename; ?></span>
                </td>
                <td>
                   <span> <?php echo $status.' '.$title.' '.$ini.' <span class="tamil">'.$tname;?> </span></span>
                </td>
                <td> 
                    <span><?php echo $dob; ?></span>
                <td>
                    <span><?php echo $do_baptism; ?></span>
                </td>
                <td>
                    <span><?php echo $head;?></span>           
                </td>
                <td>
                    <span><?php echo $relation;?></span>
                </td>
                <td>
                    <span><?php echo $gender;?></span>
                </td>    
                <td>
                    <span><?php echo $occupation;?></span>
                </td>
                <td>
                   <span><?php echo '<a href="edit_member.php?id='.$id.'">Edit</a> '; ?></span>
                </td>
            </tr>
            



<?php
}
}
else{
    echo 'No Members Found';
}
?>
            </tbody>
        </table>
        <a type="link" class="btn btn-primary btn-lg mt-2 centered" href="delete_family.php?<?php echo $$id; ?>">Delete Family</a>
        <!-- <a  class="btn  mt-2 col-lg-2 centered" href="delete_family.php?<?php echo $$id; ?>">Delete Family</a> -->
        <table class="table table-striped mt-2">
            <tr>
                <th>Category</th>
                <th>Area</th>
                <th>Phone Number</th>
                <th>Address</th>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <select class="form-select"  name="category">
                             <?php  echo getCategory($family_type); ?>
                        </select>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <select class="form-select tamil"  name="place">
                           <?php  echo getPlace(); ?>
                        </select>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <input class="form-input" type="text" name="phone" placeholder="Phone number">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <textarea class="form-input" id="input-example-3" placeholder="Textarea" rows="3" name="address"></textarea>
                    </div>
                </td>
            </tr>
        </table>
        <input type="hidden" name="family_head" id="family_head"/>
        <input type="submit" class="btn btn-primary btn-lg mt-2 centered" name="" value="Submit">
    </form>

<?php include('footer.php'); ?>

<?php
function getPlace($place)
{
    
    $db = new MyDB();
 $results = $db->query("SELECT distinct * from place ;");
  $op1='';
  while ($row = $results->fetchArray()) {
    $check='';
    if($place==$row['id'])
    {
        $check=' selected="selected" ';
    }
    else
    {
        $check='';
    }
    $op1.='<option value="'.$row['id'].'-'.$row['english'].'">'.$row['tamil'].'</option>';
}
$db->close();
return $op1;
}
function getCategory($type)
{
    // include('db_info.php');
    $db = new MyDB();
 $results = $db->query("SELECT distinct * from family_category ;");
  $op1='';
  while ($row = $results->fetchArray()) {
    $check='';
    if($type==$row['id'])
    {
        $check=' selected="selected" ';
    }
    else
    {
        $check='';
    }
    $op1.='<option '. $check.' value="'.$row['id'].'">'.$row['english'].'</option>';
}
$db->close();
return $op1;
}
?>