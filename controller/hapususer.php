<?php 
include 'koneksidb.php';
$id=$_GET['id'];
$sql = "DELETE FROM user WHERE id_user=$id";
$result = mysqli_query($connect,$sql);
if ($result>0) {
	header("Location: ../view/view_user.php");
}else{
	echo "<script>
window.alert('gagal hapus');
</script>";
}

 ?>