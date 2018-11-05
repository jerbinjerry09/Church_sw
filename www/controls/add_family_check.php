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
$status 		= (isset($_POST['sts'])) ? $_POST['sts'] : '';

// $occupation 	= 	$_POST['occupation'];
$area_code 		= 	str_pad($place[0], 3, '0', STR_PAD_LEFT);
$area 			= 	$place[1];
$family_id 		= 	substr($area, 0, 2).str_pad(rand(0,500), 3, '0', STR_PAD_LEFT).rand(500,1000);
$phone 			= 	SQLite3::escapeString($_POST['phone']);
$place 			= 	SQLite3::escapeString($_POST['place']);
$address 		= 	SQLite3::escapeString($_POST['address']);
$family_head 	= 	SQLite3::escapeString($_POST['family_head']);
$image_file=$_FILES['m_photo'];


$head_id='';

$sql1="insert into family_members (family_id,member_id,member_name,m_name_t,gender,do_birth,do_baptism,relation,member_type,status) values";
$count=count($_POST['e_name']);
for($i=0;$i<$count;$i++)
{
	
	$member_id 		=	uniqid();
	if($_POST['head']=='H'.$i)
	{
		$head_id 		.=	$member_id;
		//echo 'H'.$i.'==='.$_POST['head'];
    $head_sts=1;
	}
	else{
		$head_id 		.=	't';

	}

	$ename[$i];
	$sql1.="('".$family_id."','".$member_id."','".$ename[$i]."','".$tname[$i]."','".$sex[$i]."','".$dob[$i]."','".$dobt[$i]."','".$relation[$i]."',".$head_sts.",'".$status[$i]."')";
	if($count>($i+1))
	{
		$sql1.=', ';
	}
	else{
		$sql1.='; ';
	}

if ($_FILES['m_photo']['size'][$i] == 0 && $_FILES['m_photo']['error'] == 0)
{
      if ($_FILES['m_photo'] ['error'] > UPLOAD_ERR_OK){
          $imagename = $_FILES['m_photo']['name'][$i];
          $source = $_FILES['m_photo']['tmp_name'][$i];
          $target = "uploads/".$imagename;
          $ext = (explode(".", $imagename));
          $ext=end($ext);
          move_uploaded_file($source, $target);
          $new_name= $member_id.'.'.$ext;

          $imagepath = $imagename;
          $save = "uploads/" . $new_name; //This is the new file you saving
          $file = "uploads/" . $imagepath; //This is the original file

          list($width, $height) = getimagesize($file) ; 


          $tn = imagecreatetruecolor($width, $height) ; 
          $image = imagecreatefromjpeg($file) ; 
          imagecopyresampled($tn, $image, 0, 0, 0, 0, $width, $height, $width, $height) ; 

          imagejpeg($tn, $save, 100) ; 

          $save = "uploads/sml_" . $new_name; //This is the new file you saving
          $file = "uploads/" . $imagepath; //This is the original file

          list($width, $height) = getimagesize($file) ; 

          $modwidth = 160; 

          $diff = $width / $modwidth;

          $modheight = 185; 
          $tn = imagecreatetruecolor($modwidth, $modheight) ; 
          $image = imagecreatefromjpeg($file) ; 
          imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ; 

          imagejpeg($tn, $save, 100) ; 
          unlink('uploads/'.$imagepath);
        // echo "Large image: <img src='uploads/".$imagepath."'><br>"; 
        // echo "Thumbnail: <img src='uploads/sml_".$imagepath."'>"; 

      }
      else{
      	echo "image error";
      	die();
      }
    }



}
$sql="insert into family_list (family_id,phone,place,address,family_head,head_id) values('$family_id','$phone','$area','$address','$family_head','$head_id'); ";

$sql=$sql.$sql1;
//echo $sql;
if($db->exec($sql))
{
    header('location:../list_family.php');
   // echo $sql;
}
else{
    echo 'data not inserted';
}

//echo $family_id;



?>
