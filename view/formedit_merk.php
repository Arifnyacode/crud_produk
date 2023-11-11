<?php 
session_start();
$status = $_SESSION['as'];
$judul = "Dashboard"; 
include 'navbar.php'; 
include '../controller/koneksidb.php';
 
if (!isset($_SESSION['username'])) {
    header("Location: formlogin.php");
}
$id = $_GET['id'];
$query = "SELECT * FROM `merk` WHERE Id_merk=$id";
$dataa = mysqli_query($connect, $query);

while ($dt = mysqli_fetch_array($dataa)) {
  $namaa = $dt['nama_merk'];
}
?>
<a href="view_merk.php">back</a>
    <br/><br/>
 
    <form action="../Controller/editmerk.php" method="post">
        <table width="25%" border="0">
            <tr> 
                <td>Nama Merk</td>
                <td><input type="text" name="nama_merk" value="<?php echo $namaa ?>"></td>
            </tr>
           
            <tr> 
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="edit" value="Update"></td>
            </tr>
        </table>
    </form>
			
<?php include 'footer.php'; ?>