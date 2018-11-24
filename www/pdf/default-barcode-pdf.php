<?php
require('barcode-fpdf.php');
include('db_info.php');

$pdf=new PDF_Code39();
$pdf->AddPage();
// $pdf->Code39(80,40,'CODE 39',1,10);
// $pdf->Output();
$cat=$_GET['cat'];



 $results = $db->query("SELECT * from family_list ");
// $db = new dbObj();
// $connString =  $db->getConnstring();
// $display_heading = array('id'=>'ID', 'employee_name'=> 'Name', 'employee_age'=> 'Age','employee_salary'=> 'Salary',);
 
// $result = mysqli_query($connString, "SELECT id, employee_name, employee_age, employee_salary FROM employee") or die("database error:". mysqli_error($connString));
// $header = mysqli_query($connString, "SHOW columns FROM employee");
 
// $pdf = new PDF();
//header
// $pdf->AddPage();
//foter page
// $pdf->AliasNbPages();
// $pdf->SetFont('Arial','B',8);
// $pdf->SetFont('tamil','',14);
// foreach($header as $heading) {
// $pdf->Cell(40,12,$display_heading[$heading['Field']],1);
// }
// $results->fetchArray();
// while ($result = $results->fetchArray()) {
// // $result = $results->fetchArray();
// print_r($result);
// }
// $pdf->SetFont('Arial','B',8);
// $pdf->Cell(10,6,'S.No',1);
// $pdf->SetFont('Arial','B',8);
// $pdf->Cell(20,6,'Family Id',1);
// $pdf->Cell(10,6,'','L,T,B');
// $pdf->Cell(50,6,'Family Head','R,T,B');
// $pdf->Cell(60,6,'Place',1);
$x=5;
$y=5;
$i=0;
$j=0;
$pdf->AddFont('tamil','','tamil.ttf',true);
    $pdf->SetFont('tamil','',10);
while ($row = $results->fetchArray()) {
    $ini=getInt($row['head_id']);
    $place=getPlace($row['place']);
    $pdf->SetFont('tamil','',12);
    //$pdf->Cell(50,6,$row['family_head']);
// foreach($result as $row) {


if($i==4)
{
	$i=0;
	$y+=32;
	$x=5;
}
if($j==36)
{
	$pdf->AddPage();
	$x=5;
$y=5;
$i=0;
$j=0;

}
else{


}
$pdf->SetXY($x, $y);
$pdf->Cell(50,6,$row['family_head']);
$pdf->SetXY($x, $y+6);
$pdf->Cell(50,6,$place);
$pdf->Code39($x,$y+12,$row['family_id'].'-'.$cat,0.4,3);
// $pdf->Cell(60,6,$x.$y,1);
$i++;
$x+=50;

// foreach($row as $column=>$item)
// {
//  if (is_int($column)) {
//      $pdf->Cell(30,6,$item,1);
//  }
// }
$j++;
}

$pdf->Output();
?>
<?php

function getInt($id)
{
    $op='';
    $db1 = new MyDB();
     $results1 = $db1->query("SELECT * from family_members where member_id='$id'");
     while ($row1 = $results1->fetchArray()) {

        $op= $row1['title'].' '.$row1['ini'];
     }
     return $op;
     $db1->close();

}
function getPlace($id)
{
	$op='';
    $db1 = new MyDB();
     $results1 = $db1->query("SELECT tamil from place where id=$id");
     // echo "SELECT tamil from place where id=".$id;
     while ($row1 = $results1->fetchArray()) {

        $op= $row1['tamil'];
     }
     $db1->close();
     return $op;
     // $db1->close();

}


?>