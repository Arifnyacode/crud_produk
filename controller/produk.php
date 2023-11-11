<?php 
include 'koneksidb.php';

$query = "SELECT * FROM produk JOIN merk ON merk.Id_merk=produk.Id_merk JOIN kategori ON kategori.Id_kategori=produk.Id_kategori";
$data = mysqli_query($connect, $query);

 ?>