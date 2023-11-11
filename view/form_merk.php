<?php 
session_start();
$status = $_SESSION['as'];
$judul = "tambah merk"; 
include 'navbar.php';
 
if (!isset($_SESSION['username'])) {
    header("Location: formlogin.php");
}
?>
<h3>Formulir menambahkan merk</h3>
<a href="view_merk.php">back</a>
    <br/><br/>
 
    <form action="../controller/tambahmerk.php" method="post">
        <table width="25%" border="0">
            <tr> 
                <td>Nama Merk</td>
                <td><input type="text" name="nama_merk"></td>
            </tr>
           
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Tambahkan">
                	<input type="reset" name="rest" value="cancel"></td>
            </tr>
        </table>
    </form>
			
<?php include 'footer.php'; ?>