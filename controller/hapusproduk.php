<?php 
include 'koneksidb.php';

$id = $_GET['id'];

$sql = "DELETE FROM `produk` WHERE Id_produk=$id";
$data = mysqli_query($connect, $sql);
if ($data>0) {
	header("Location: ../view/view_merek.php");
}

 ?>