<?php
require_once 'FPDF/fpdf.php';
$pdf = new fpdf();
$pdf -> AddPage();

$servername = "localhost";
$username = "root";
$password ="";
$dbname = "area";

$conn = mysqli_connect($servername,$username,$password,$dbname);

$sql = "SELECT * FROM calculate";
 $result = mysqli_query($conn,$sql);

$pdf -> SetLeftMargin(75);
$pdf -> SetFont("Arial","BU",25);
$pdf -> Cell(40,20,'ZANI PROPERTIES',0,1);

$pdf -> SetXY(28,25);
$pdf -> SetLeftMargin(15);
$pdf -> SetFont("Arial","BU",20);
$pdf -> Cell(30,20,'Calculated Area & Price for Available Plots',0,1);

$pdf -> SetFont("Arial","B",15);
$pdf -> SetXY(30,44);
$pdf -> Cell(30,9,'Plot No.', 1,0,'C');
$pdf -> Cell(30,9,'Length', 1,0,'C');
$pdf -> Cell(30,9,'Width', 1,0,'C');
$pdf -> Cell(28,9,'Area', 1,0,'C');
$pdf -> Cell(28,9,'Price', 1,0,'C');


$pdf -> SetFont("Arial","",10);

$pdf -> SetXY(30,53);
  while ($row = $result->fetch_assoc()){
    $pdf -> SetFont("Arial","",15);
    //$pdf -> SetXY(23,95);
    $pdf -> Cell(30,9,$row['plotno'], 1,0,'C');
    $pdf -> Cell(30,9,$row['length'], 1,0,'');
    $pdf -> Cell(30,9,$row['width'], 1,0,'C');
    $pdf -> Cell(28,9,$row['area'], 1,0,'C');
    $pdf -> Cell(28,9,$row['price'], 1,0,'C');
    
    $pdf -> ln();
    $pdf -> SetX(30);
  }


$conn-> close();

$pdf -> output();
?>