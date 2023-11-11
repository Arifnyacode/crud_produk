<?php
// memanggil library FPDF
require('../library/fpdf186/fpdf.php');
include 'koneksidb.php';
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','LETTER');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'DATA PRODUK',0,0,'C');
 
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(50,7,'USERNAME' ,1,0,'C');
$pdf->Cell(30,7,'PASSWORD',1,0,'C');
$pdf->Cell(30,7,'NAMA PENGGUNA',1,0,'C');
$pdf->Cell(30,7,'LEVEL',1,0,'C');
 
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data = mysqli_query($connect,"SELECT * FROM user");
foreach ($data as $d) {
	if ($d['level']==1) {
		$status="bos";
	}elseif ($d['level']==2) {
		$status="Admin";
	}elseif ($d['level']==3) {
		$status="petugas";
	}
	$pdf->Cell(10,6, $no++,1,0,'C');
  	$pdf->Cell(50,6, $d['username'],1,0);
  	$pdf->Cell(30,6, $d['password'],1,0);  
  	$pdf->Cell(30,6, $d['name'],1,0);
  	$pdf->Cell(30,6, $status,1,0);
  	$pdf->Ln();
}
 
$pdf->Output();
 
?>