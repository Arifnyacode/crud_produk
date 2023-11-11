<?php 
include 'koneksidb.php';

if (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$nama = $_POST['nama_merk'];

	$sql = "UPDATE `merk` SET `nama_merk`='$nama' WHERE Id_merk='$id'";
	$data = mysqli_query($connect,$sql);
	echo "<script>alert('Berhasil Dirubah')</script>";
	header("Location: ../view/view_merk.php");
}
 ?>