<?php
// memanggil library FPDF
require('../library/fpdf186/fpdf.php');
include 'koneksidb.php';
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','LETTER');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'DATA MERK',0,0,'C');
 
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(30,7,'NAMA MERK',1,0,'C');
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data = mysqli_query($connect,"SELECT * FROM merk");
foreach ($data as $d) {
  $pdf->Cell(10,6, $no++,1,0,'C'); 
    $pdf->Cell(30,6, $d['nama_merk'],1,0);
    $pdf->Ln();
}
 
$pdf->Output();
 
?>