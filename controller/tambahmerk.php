<?php 
include 'koneksidb.php';

if(isset($_POST['Submit'])){
	$namamerk = $_POST['nama_merk'];

	$sql = "INSERT INTO `merk`(`Id_merk`, `nama_merk`) VALUES ('','$namamerk')";
	$result = mysqli_query($connect, $sql);
	echo "<script>alert('Berhasil Menambahkan')</script>";
	header("Location: ../view/view_merk.php");
	
}



 ?>