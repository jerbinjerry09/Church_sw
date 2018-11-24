<?php
require('barcode-fpdf.php');
include('db_info.php');

$pdf=new PDF_Code39();
$pdf->AddPage();
// $pdf->Code39(80,40,'CODE 39',1,10);
// $pdf->Output();
$cat=6;
$from=$_GET['from'];
$to=$_GET['to'];



 $results = $db->query("SELECT * from family_members where  ((strftime('%m-%d',do_birth) > strftime('%m-%d','".$from."')) and (strftime('%m-%d',do_birth) < strftime('%m-%d','".$to."')))");

// echo "SELECT * from family_members where  ((strftime('%m-%d',do_birth) > strftime('%m-%d','".$from."')) and (strftime('%m-%d',do_birth) < strftime('%m-%d','".$to."')))";
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
    // $ini=getInt($row['member_id']);
    $place_id=getPlaceId($row['family_id']);
    $place=getPlace($place_id);
    $pdf->SetFont('tamil','',10);
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
$pdf->SetFont('Arial','',10);
$pdf->Cell(10,6,$row['title'].' '.$row['ini']);
$pdf->SetFont('tamil','',10);
$pdf->SetXY($x+11, $y);
$pdf->Cell(39,6,$row['m_name_t']);
$pdf->SetXY($x, $y+6);
$pdf->Cell(50,6,$place);
$pdf->Code39($x,$y+12,$row['family_id'].'-'.$cat.'-'.$row['id'],0.5,5);
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
function getPlaceId($id)
{
    $op='';
    $db1 = new MyDB();
     $results1 = $db1->query("SELECT place from family_list where family_id='$id'");
     // echo "SELECT tamil from place where id=".$id;
     while ($row1 = $results1->fetchArray()) {

        $op= $row1['place'];
     }
     $db1->close();
     return $op;
     // $db1->close();

}


?>