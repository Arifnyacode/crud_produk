<?php 
include 'koneksidb.php';

if(isset($_POST['Submit'])){
	$id = $_POST['id'];
	$idmerk = $_POST['id_merk'];
	$idkategori = $_POST['id_kategori'];
	$namaproduk = $_POST['nama_produk'];
	$jml = $_POST['jumlah'];
	$tanggal = $_POST['tgl'];

	$sql_insert = "INSERT INTO `produk`(`Id_produk`, `Id_merk`, `Id_kategori`, `nama_produk`, `jumlah_produk`, `tgl_masuk`) VALUES ('','$idmerk','$idkategori','$namaproduk','$jml','$tanggal')";
	$result = mysqli_query($connect,$sql_insert);
	if($result>0){
		
		header("Location: ../view/view_produk.php");
	}
}
 ?>
