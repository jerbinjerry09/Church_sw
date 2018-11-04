<?php
//include connection file 
include("db_info.php");
include('libs/tfpdf.php');

header('Content-Type: text/html;charset=utf-8');
class PDF extends tFPDF
{
// Page header
function Header()
{
    // Logo
    // $this->Image('logo.png',10,-1,70);
    // $this->SetFont('tamil');
    $this->AddFont('tamil','','tamil.ttf',true);
	$this->SetFont('tamil','',14);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'ghij',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 $results = $db->query("SELECT * from family_list ");
// $db = new dbObj();
// $connString =  $db->getConnstring();
// $display_heading = array('id'=>'ID', 'employee_name'=> 'Name', 'employee_age'=> 'Age','employee_salary'=> 'Salary',);
 
// $result = mysqli_query($connString, "SELECT id, employee_name, employee_age, employee_salary FROM employee") or die("database error:". mysqli_error($connString));
// $header = mysqli_query($connString, "SHOW columns FROM employee");
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',8);
// foreach($header as $heading) {
// $pdf->Cell(40,12,$display_heading[$heading['Field']],1);
// }
// $results->fetchArray();
// while ($result = $results->fetchArray()) {
// // $result = $results->fetchArray();
// print_r($result);
// }
while ($row = $results->fetchArray()) {
// foreach($result as $row) {
$pdf->Ln();
foreach($row as $column=>$item)
{
	if (is_int($column)) {
		$pdf->Cell(30,6,$item,1);
	}
}
}
while ($row = $results->fetchArray()) {
// foreach($result as $row) {
$pdf->Ln();
foreach($row as $column=>$item)
{
	if (is_int($column)) {
		$pdf->Cell(30,6,$item,1);
	}
}
}
while ($row = $results->fetchArray()) {
// foreach($result as $row) {
$pdf->Ln();
foreach($row as $column=>$item)
{
	if (is_int($column)) {
		$pdf->Cell(30,6,$item,1);
	}
}
}
$pdf->Output();
?>