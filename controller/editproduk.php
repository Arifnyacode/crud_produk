<?php 
include 'koneksidb.php';

if(isset($_POST['Submit'])){
	$id = $_POST['id_produk'];
	$idmerk = $_POST['id_merk'];
	$idkategori = $_POST['id_kategori'];
	$namaproduk = $_POST['nama_produk'];
	$jml = $_POST['jumlah'];
	$tanggal = $_POST['tgl'];

	$sql_insert = "UPDATE `produk` SET `Id_merk`='$idmerk',`Id_kategori`='$idkategori',`nama_produk`='$namaproduk',`jumlah_produk`='$jml',`tgl_masuk`='$tanggal' WHERE Id_produk=$id";
	$result = mysqli_query($connect,$sql_insert);
	if($result>0){
		
		header("Location: ../view/view_produk.php");
	}
}
 ?>
