<?php

include('db_info.php');

$place=explode('-', $_POST['place']);
$area_code=str_pad($place[0], 3, '0', STR_PAD_LEFT);
$area=$place[1];
$family_id=substr($area, 0, 2).$area_code.'-'.str_pad(rand(0,500), 3, '0', STR_PAD_LEFT);rand(0,500);
$phone=SQLite3::escapeString($_POST['phone']);
$place=SQLite3::escapeString($_POST['place']);
$address=SQLite3::escapeString($_POST['address']);
$family_head='testing head';


$sql="insert into family_list (family_id,phone,place,address,family_head) values('$family_id','$phone','$place','$address','$family_head');";
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
<a href="../home.php">Home </a>