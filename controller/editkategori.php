<?php 
include 'koneksidb.php';

if (isset($_POST['edit'])) {
	$idkategori = $_POST['idkategori'];
	$idmerk = $_POST['Id_merk'];
	$nama = $_POST['nama_kategori'];

	$sql = "UPDATE `kategori` SET `Id_merk`='$idmerk',`nama_kategori`='$nama' WHERE Id_kategori=$idkategori";
	$data = mysqli_query($connect,$sql);
	if ($data) {
		echo "<script>alert('Berhasil Dirubah')</script>";
		header("Location: ../view/view_kategori.php");
	}else{
		echo "<script>alert('Gagal Dirubah')</script>";
		header("Location: formedit_kategori.php");
	}

}
 ?>