<?php 
include 'koneksidb.php';

	$iduser = $_POST['id'];
	$usernamenya = $_POST['username'];
    $passnya = md5($_POST['password']);
    $namanya = $_POST['nama'];
    $stt = $_POST['level'];
    $sql = "UPDATE user SET `username`='$usernamenya',`password`='$passnya',`name`='$namanya',`level`='$stt' WHERE id_user=$iduser";
	$result = mysqli_query($connect, $sql);
	if ($result>0) {
		echo "<script>
window.alert('berhasil di ubah');
</script>";
		header("Location: ../view/view_user.php");
	}else{
		echo "<script>
window.alert('gagal edit');
</script>";
	}
    
 ?>