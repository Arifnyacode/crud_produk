<?php 
session_start();
$status = $_SESSION['as'];
$judul = "Tambah User"; 
include 'navbar.php';

 
if (!isset($_SESSION['username'])) {
    header("Location: formlogin.php");
}
?>
<h3>Formulir menambahkan user</h3>
<br>
<a href="view_user.php">kembali</a>
<br>
<form action="../controller/tambahuser.php" method="POST">
	<table width="40%">
		
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" ></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" ></td>
		</tr>
		<tr>
			<td>Nama User</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Status sebagai</td>
			<td><select name="level" id="">
				<option value="0">pilih sebagai</option>
				<option value="1">Boss</option>
				<option value="2">Admin</option>
				<option value="3">Petugas</option>
			</select></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Simpan">
				<input type="reset" value="cancel">
			</td>
		
		</tr>

		
	</table>
</form>
			
<?php include 'footer.php'; ?>