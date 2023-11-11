<?php 
include 'koneksidb.php';

$sqlm = "SELECT * FROM merk";
$sqlk = "SELECT * FROM kategori JOIN merk ON kategori.Id_merk=merk.Id_merk";
$sqlp = "SELECT * FROM produk JOIN merk ON merk.Id_merk=produk.Id_merk JOIN kategori ON kategori.Id_kategori=produk.Id_kategori";

$data_merk = mysqli_query($connect,$sqlm);
$data_kategori = mysqli_query($connect,$sqlk);
$data_produk = mysqli_query($connect,$sqlp);

 ?>