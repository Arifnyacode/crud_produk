<?php 
session_start();
$status = $_SESSION['as'];
$judul = "List User"; 
include 'navbar.php';
include '../controller/users.php'; 
 
if (!isset($_SESSION['username'])) {
    header("Location: formlogin.php");
}
?>
<h3>Daftar Pengguna Sistem</h3>
<a href="form_user.php"><button>Tambah data</button></a>
<table border="1" align="center" width="80%">
	<tr>
		<th>No. </th>
		<th>Username </th>
		<th>Password </th>
		<th>Nama </th>
		<th>Status </th>
		<th>Action</th>
	</tr>

	<?php 
	$no=1;
	foreach ($data_user as $user): ?>
		
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $user['username'] ?></td>
			<td><?php echo $user['password'] ?></td>
			<td><?php echo $user['name'] ?></td>
			<td>
				<?php if ($user['level']==1) {
					echo "Boss";
				} elseif($user['level']==2){
					echo "Administrator";
				}elseif ($user['level']==3) {
					echo "Petugas";
				}else{
					echo "tidak ada status";
				}
				?>
			</td>
			<td><a href="formedit_user.php?id=<?php echo $user['id_user'] ?> ">edit</a> <a href="../controller/hapususer.php?id=<?php echo $user['id_user'] ?>">hapus</a></td>
		</tr>
	<?php endforeach ?>
</table>
<?php include 'footer.php'; ?>