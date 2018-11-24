<?php
include('db_info.php');

$cat_id=$_POST['cat_id'];
$family_id = ucfirst($_POST['family_id']);
$entry_date = date("Y-m-d");
$receipt_date = $_POST['receipt_date'];
$member_id=$_POST['member_id'];


if($cat_id==0){
$monthly_amt 	= 	SQLite3::escapeString($_POST['monthly_amt']);
$monthly_desc 	= 	SQLite3::escapeString($_POST['monthly_desc']);
$msnry_amt 		= 	SQLite3::escapeString($_POST['msnry_amt']);
$msnry_desc 	= 	SQLite3::escapeString($_POST['msnry_desc']);
$rice_amt 		= 	SQLite3::escapeString($_POST['rice_amt']);
$rice_desc 		= 	SQLite3::escapeString($_POST['rice_desc']);
$months = 1;

$sql="INSERT INTO receipt (family_id,member_id,receipt_date,category,description,amount,months,entry_date) values('".$family_id."',".$member_id.",'".$receipt_date."',3,'".$monthly_desc."',".$monthly_amt.",'".$months."','".$entry_date."')";

if($msnry_amt!=='' || $msnry_amt!=null)
{
	$sql.=", ('".$family_id."',".$member_id.",'".$receipt_date."',4,'".$msnry_desc."',".$msnry_amt.",'".$months."','".$entry_date."')";
}
if($rice_amt!=='' || $rice_amt!=null)
{
	$sql.=", ('".$family_id."',".$member_id.",'".$receipt_date."',5,'".$rice_desc."',".$rice_amt.",'".$months."','".$entry_date."')";
}


}
else if($cat_id==6){

	$bday_amt 	= 	SQLite3::escapeString($_POST['bday_amt']);
	$bday_desc 	= 	SQLite3::escapeString($_POST['bday_desc']);
	$sql="INSERT INTO receipt (family_id,member_id,receipt_date,category,description,amount,months,entry_date) values('".$family_id."',".$member_id.",'".$receipt_date."',6,'".$bday_desc."',".$bday_amt.",'".$months."','".$entry_date."')";

}
else{
	$receipt_status=getStatus($cat_id);

		$receipt_amt 	= 	SQLite3::escapeString($_POST['receipt_amt']);
	$receipt_desc 	= 	SQLite3::escapeString($_POST['receipt_desc']);
	$sql="INSERT INTO receipt (family_id,member_id,receipt_date,category,description,amount,months,entry_date,status) values('".$family_id."',".$member_id.",'".$receipt_date."',".$cat_id.",'".$receipt_desc."',".$receipt_amt.",'".$months."','".$entry_date."',".$receipt_status.")";

}

echo $sql;

if($db->exec($sql))
{
	echo "inserted";
}

function getStatus($id)
{
    $db1 = new MyDB();
    $op='';

    $query="SELECT * from category where id=$id";

     $results1 = $db1->query($query);
     while ($row1 = $results1->fetchArray()) {
     	if($row['type']=='Income')
     	{
     		$op.= 0;
     	}
     	else{
     		$op.= 1;
     	}
        
     }
     // echo $query;
     return $op;
     $db1->close();

}



?>