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
$pdf->Cell(50,7,'NAMA PRODUK' ,1,0,'C');
$pdf->Cell(30,7,'NAMA MERK',1,0,'C');
$pdf->Cell(30,7,'NAMA KATEGORI',1,0,'C');
$pdf->Cell(30,7,'JUMLAH PRODUK',1,0,'C');
$pdf->Cell(30,7,'TANGGAL MASUK',1,0,'C');
$pdf->Cell(20,7,'Harga',1,0,'C'); 
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$satuan = "Rp. ";
$no=1;
$data = mysqli_query($connect,"SELECT * FROM produk JOIN merk ON merk.Id_merk=produk.Id_merk JOIN kategori ON kategori.Id_kategori=produk.Id_kategori");
foreach ($data as $d) {
	$pdf->Cell(10,6, $no++,1,0,'C');
  	$pdf->Cell(50,6, $d['nama_produk'],1,0);
  	$pdf->Cell(30,6, $d['nama_kategori'],1,0);  
  	$pdf->Cell(30,6, $d['nama_merk'],1,0);
  	$pdf->Cell(30,6, $d['jumlah_produk'],1,0);
  	$pdf->Cell(30,6, $d['tgl_masuk'],1,0);
  	$pdf->Cell(20,6, number_format($d['harga'],0,',','.'),1,0);
  	$pdf->Ln();
}
 
$pdf->Output();
 
?>