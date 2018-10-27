<?php

include('db_info.php');

$place			= 	explode('-', $_POST['place']);

$ename			= 	$_POST['e_name'];
$tname			= 	$_POST['t_name'];
$dob 			= 	$_POST['dob'];
$dobt 			= 	$_POST['dobp'];
$relation 		= 	$_POST['relation'];
$head 			= 	$_POST['head'];
$sex 			= 	$_POST['sex'];
$status 		= 	$_POST['sts'];
$occupation 	= 	$_POST['occupation'];
$area_code 		= 	str_pad($place[0], 3, '0', STR_PAD_LEFT);
$area 			= 	$place[1];
$family_id 		= 	substr($area, 0, 2).str_pad(rand(0,500), 3, '0', STR_PAD_LEFT).rand(500,500);
$phone 			= 	SQLite3::escapeString($_POST['phone']);
$place 			= 	SQLite3::escapeString($_POST['place']);
$address 		= 	SQLite3::escapeString($_POST['address']);
$family_head 	= 	SQLite3::escapeString($_POST['family_head']);


$head_id='';

$sql1="insert into family_members (family_id,member_id,member_name,m_name_t,gender,do_birth,do_baptism,relation,occupation,status) values";
$count=count($_POST['e_name']);
for($i=0;$i<$count;$i++)
{
	$member_id 		=	uniqid();
	if($_POST['head']=='H'.$i)
	{
		$head_id 		.=	$member_id;
		echo 'H'.$i.'==='.$_POST['head'];
	}
	else{
		$head_id 		.=	't';

	}

	$ename[$i];
	$sql1.="('".$family_id."','".$member_id."','".$ename[$i]."','".$tname[$i]."','".$sex[$i]."','".$dob[$i]."','".$dobt[$i]."','".$relation[$i]."','".$occupation[$i]."','".$status[$i]."')";
	if($count>($i+1))
	{
		$sql1.=', ';
	}
	else{
		$sql1.='; ';
	}

}
$sql="insert into family_list (family_id,phone,place,address,family_head,head_id) values('$family_id','$phone','$area','$address','$family_head','$head_id'); ";

$sql=$sql.$sql1;
echo $sql;
if($db->exec($sql))
{
    echo 'data inserted';
    echo $sql;
}
else{
    echo 'data not inserted';
}

echo $family_id;



?>
