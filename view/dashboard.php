<?php 
session_start();
$status = $_SESSION['as'];
$judul = "Dashboard"; 
include 'navbar.php'; 

 
if (!isset($_SESSION['username'])) {
    header("Location: formlogin.php");
}
?>
<article>
	<p>
            Dashboard Sistem
          </p>
          selamat datang <?php echo "".$_SESSION['username']; ?>
          
</article>
			
<?php include 'footer.php'; ?>