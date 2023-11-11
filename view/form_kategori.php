<?php 
session_start();
$status = $_SESSION['as'];
$judul = "Tambah Kategori"; 
include 'navbar.php'; 
include '../controller/merk.php';
 
if (!isset($_SESSION['username'])) {
    header("Location: formlogin.php");
}
?>
<h3>Formulir menambahkan Kategori</h3>
<a href="view_kategori.php">Kembali</a>
    <br/><br/>
 
    <form action="../controller/tambahkategori.php" method="post">
        <table width="25%" border="0">
          <tr>
            <td></td>
            <td></td>
          </tr>
            <tr> 
                <td>Nama kategori</td>
                <td><input type="text" name="nama_kategori"></td>
            </tr>
           <tr>
              <td>Nama merk</td>
              <td>
                <select name="id_merk">
                  <option value="">Pilih Merk</option>
                  <?php foreach($data as $m): ?>
                    <option value="<?php echo $m['Id_merk'] ?>"><?php echo $m['nama_merk']; ?></option>
                  <?php endforeach; ?>
                </select>
              </td>  
           </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Tambahkan">
                	<input type="reset" name="clear" value="Cancel">
                </td>
            </tr>
        </table>
    </form>
			
<?php include 'footer.php'; ?>