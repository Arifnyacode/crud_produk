<?php 
include 'koneksidb.php';

error_reporting(0);

session_start();

if(isset($_SESSION['username'])){
	header("Location: formlogin.php");
}

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = md5($_POST['pass']);
	

	$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
	//echo $sql;
	$result = mysqli_query($connect, $sql);
	if($result->num_rows > 0){
		$row = mysqli_fetch_assoc($result);
		$_SESSION['as'] = $row['level'];
		$_SESSION['username'] = $row['username'];
		header("Location: ../view/dashboard.php");
	}else{
		header("Location: ../view/formlogin.php");
		//echo "<script>alert('Username atau password salah')</script>";
	}
	
}
 ?>