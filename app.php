<?php
require_once 'FPDF/fpdf.php';
$pdf = new fpdf();
$pdf -> AddPage();

$servername = "localhost";
$username = "root";
$password ="";
$dbname = "area";

$conn = mysqli_connect($servername,$username,$password,$dbname);

$sql = "SELECT * FROM contact";
 $result = mysqli_query($conn,$sql);

$pdf -> SetLeftMargin(75);
$pdf -> SetFont("Arial","BU",25);
$pdf -> Cell(40,20,'ZANI PROPERTIES',0,1);

$pdf -> SetXY(28,25);
$pdf -> SetLeftMargin(15);
$pdf -> SetFont("Arial","BU",20);
$pdf -> Cell(30,20,'Applicants Data from The land Booking Form',0,1);

$pdf -> SetFont("Arial","B",10);
$pdf -> SetXY(20,44);
$pdf -> Cell(20,7,'Plot No.', 1,0,'C');
$pdf -> Cell(50,7,'NAME', 1,0,'C');
$pdf -> Cell(28,7,'ID NUMBER', 1,0,'C');
$pdf -> Cell(47,7,'EMAIL', 1,0,'C');
$pdf -> Cell(28,7,'PHONE NO.', 1,0,'C');


$pdf -> SetFont("Arial","",10);

$pdf -> SetXY(20,51);
  while ($row = $result->fetch_assoc()){
    $pdf -> SetFont("Arial","",10);
    //$pdf -> SetXY(23,95);
    $pdf -> Cell(20,7,$row['plotno'], 1,0,'C');
    $pdf -> Cell(50,7,$row['name'], 1,0,'');
    $pdf -> Cell(28,7,$row['idno'], 1,0,'C');
    $pdf -> Cell(47,7,$row['email'], 1,0,'');
    $pdf -> Cell(28,7,$row['phone_number'], 1,0,'');
    
    $pdf -> ln();
    $pdf -> SetX(20);
  }


$conn-> close();
$pdf -> Output();

?>