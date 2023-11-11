<?php 
include 'koneksidb.php';

$id = $_GET['id'];
$sql = "DELETE FROM kategori WHERE Id_kategori=$id";
$res = mysqli_query($connect,$sql);
if ($res>0) {
	header("Location: ../view/view_kategori.php");
	echo "<script>alert('Berhasil dihapus')</script>";
}else{
	echo "<script>alert('gagal menghapus')</script> ";
}


 ?>