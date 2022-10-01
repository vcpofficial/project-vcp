<?php
if(!empty($_POST['text']))
  $text = $_POST['text'];

  require("fpdf/fpdf.php");
  $pdf = new FPDF;
  $pdf->AddPage();
 
  $pdf->SetFont("Arial","",16);
  
  // $pdf->Cell(0,10,$text,1,1);
  $pdf->MultiCell(0,10,$text,1,1);
  // $pdf->MultiCell(0,10,$text,'LRTB','L',false);
  $pdf->output();
    
?>