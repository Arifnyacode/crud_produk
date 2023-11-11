<?php 
include 'koneksidb.php';

$query = "SELECT * FROM kategori JOIN merk ON kategori.Id_merk=merk.Id_merk";
$data = mysqli_query($connect, $query);

 ?>