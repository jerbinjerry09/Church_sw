<?php
include('db_info.php');
$edit_amt 		= 	SQLite3::escapeString($_POST['edit_amt']);
$edit_desc 		= 	SQLite3::escapeString($_POST['edit_desc']);
$receipt_id 	= 	SQLite3::escapeString($_POST['receipt_no']);
$sql="Update receipt set amount=".$edit_amt." , description='".$edit_desc."' where id=".$receipt_id;
if($db->exec($sql))
{
	$db->close();
    header('location:../data_entry.php');
   // echo $sql;
}
else{
	$db->close();
    echo 'data not inserted<br>';
    echo $sql;
}




?>