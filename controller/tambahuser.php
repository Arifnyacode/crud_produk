<?php 
include 'koneksidb.php';
//dapatkan data user dari form register
    		$usernamenya = $_POST['username'];
    		$passnya = md5($_POST['password']);
    		$namanya = $_POST['nama'];
    		$stt = $_POST['level'];
    		$sql = "INSERT INTO `user`(`id_user`, `username`, `password`, `name`, `level`) VALUES ('','$usernamenya','$passnya','$namanya','$stt')";
			$result = mysqli_query($connect, $sql);
			if ($result>0) {
				echo "<script>
window.alert('berhasil di tambah');
</script>";
				header("Location: ../view/view_user.php");
			}else{
				echo "<script>
window.alert('Gagal Menambahkan');
</script>";
			}
    	

 ?>