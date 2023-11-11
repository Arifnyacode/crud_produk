<?php 
session_start();
$status = $_SESSION['as'];
$judul = "Dashboard"; 
include 'navbar.php'; 
include '../controller/koneksidb.php';
 
if (!isset($_SESSION['username'])) {
    header("Location: formlogin.php");
}
$id=$_GET['id'];
$sql = "SELECT * FROM user WHERE id_user=$id";
$users = mysqli_query($connect,$sql);
while($data = mysqli_fetch_array($users)){
$uname = $data['username'];
$pswd = $data['password'];
$namaa = $data['name'];
$lvl = $data['level'];
}
?>
<br>
<a href="view_user.php">kembali</a>
<br>
<form action="../controller/edituser.php" method="POST">
	<table width="40%">
		<tr>
			<td><input type="hidden" name="id" value="<?php echo $id ?>"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value="<?php echo $uname ?>"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" value="<?php echo $pswd ?>"></td>
		</tr>
		<tr>
			<td>Nama User</td>
			<td><input type="text" name="nama" value="<?php echo $namaa ?>"></td>
		</tr>
		<tr>
			<td>Status sebagai</td>
			<td><select name="level" id="">
				<option value="0">pilih sebagai</option>
				<option value="1" <?php if ($lvl==1){echo "selected";}  ?>>Boss</option>
				<option value="2" <?php if ($lvl==2){echo "selected";}  ?>>Admin</option>
				<option value="3" <?php if ($lvl==3){echo "selected";}  ?>>Petugas</option>
			</select></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Simpan" value="Simpan">
				<input type="reset" value="cancel">
			</td>
		
		</tr>

		
	</table>
</form>
			
<?php include 'footer.php'; ?>