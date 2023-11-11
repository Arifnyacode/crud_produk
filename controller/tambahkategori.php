<?php 
include 'koneksidb.php';

if(isset($_POST['Submit'])){
	$idmerk = $_POST['id_merk'];
	$namakategori = $_POST['nama_kategori'];

	$sql = "INSERT INTO `kategori`(`Id_kategori`,`Id_merk`, `nama_kategori`) VALUES ('','$idmerk','$namakategori')";	
	$result = mysqli_query($connect, $sql);
	if ($result>0) {
		echo "<script>alert('Berhasil Menambahkan!')</script>";
		header("Location: ../view/view_kategori.php");
	}
		
}
 ?>