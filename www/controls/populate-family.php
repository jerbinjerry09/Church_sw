<?php

include('db_info.php');

$data=$_GET['id'];
$data=explode('-', $data);
$id= strtolower($data[0]);
$length=sizeof($data);
//echo $id;
 $prop = new stdClass();
// $id=$_GET['id'];
$member=array();
//$member[]=array();
$result=$db->query("SELECT * FROM  family_members where family_id='".$id."' ");
//echo "SELECT * FROM  family_members where family_id='".$id."' ";
$i=0;
// $prop = new stdClass();
// $prop=array();
$test='';
while($row=$result->fetchArray())
{
	 $var=array();
	 // $val=array();
	 
	$val=array('id'=>$row['id'],'name'=>$row['member_name'],'member_id'=>$row['member_id'],'member_type'=>$row['member_type']);
	//array_push($var,$val);
// $test.=;
	// $member[$i]['member_id']=$row['member_id'];
	// $member[$i]['member_type']=$row['member_type'];
	// $i++;
	array_push($member, $val);
	//print_r($row);
	//exit();
}

// echo "hello";
$place=getPlace($id);
$recipt=getRecipt();
if($length>2)
{
	$member_id=$data[2];
}
else{
	$member_id=0;
}
 echo json_encode(array('member_id'=>$member_id,'receipt'=>$recipt,'family_id'=>$id,'place'=>$place,'cat'=>$data[1],'member'=>$member));
 // echo json_encode(array('getprops'=>true,'test1'=>$prop->address, 'test'=>$query,'category'=>$sort_category,'props'=>$props));

// print_r($member);

function getPlace($id){
	class MyDB1 extends SQLite3{
    function __construct()
    {
        $this->open('../../church.db');
    }
}
$db1 = new MyDB1();
$result1=$db1->query("SELECT place FROM  family_list where family_id='".$id."' ");
$row1=$result1->fetchArray();
return $row1['place'];




}
function getRecipt()
{
	class MyDB12 extends SQLite3{
    function __construct()
    {
        $this->open('../../church.db');
    }
}
$db12 = new MyDB1();
$result12=$db12->query("SELECT id from receipt order by id DESC limit 1");
$row12=$result12->fetchArray();
return $row12['id'];


}
?>