<?php 
session_start();
$status = $_SESSION['as'];
$judul = "Tambah Produk";
include 'navbar.php';
include '../controller/getAll.php';
 
if (!isset($_SESSION['username'])) {
    header("Location: formlogin.php");
}
?>
<h3>Formulir menambahkan produk</h3>
<a href="view_produk.php">Kembali</a>
    <br/><br/>
 
    <form action="../controller/tambahproduk.php" method="post">
        <table width="25%" border="0">
          <tr>
            <td></td>
            <td></td>
          </tr>
            
            <tr> 
                <td>Nama produk</td>
                <td><input type="text" name="nama_produk"></td>
            </tr>
           <tr>
              <td>Nama merk</td>
              <td>
                <select name="id_merk">
                  <option value="">Pilih Merk</option>
                  <?php foreach($data_merk as $m): ?>
                    <option value="<?php echo $m['Id_merk'] ?>"><?php echo $m['nama_merk']; ?></option>
                  <?php endforeach; ?>
                </select>
              </td>  
           </tr>
           <tr>
             <td>Nama kategori</td>
             <td>
               <select name="id_kategori">
                  <option value="">Pilih kategori</option>
                  <?php foreach($data_kategori as $k): ?>
                    <option value="<?php echo $k['Id_kategori'] ?>"><?php echo $k['nama_kategori']; ?></option>
                  <?php endforeach; ?>
                </select>
             </td>
           </tr>
           <tr>
             <td>Jumlah Produk</td>
             <td><input type="number" name="jumlah" id="jumlah"></td>
           </tr>
           <tr>
             <td>tanggal masuk produk</td>
             <td><input type="date" name="tgl" id="tgl"></td>
           </tr>
           <tr>
             <td>Harganya</td>
             <td><input type="number" name="harga_produk" id="harga"></td>
           </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Tambahkan">
				<input type="reset" name="clear" value="bersihkan">
                </td>
            </tr>
        </table>
    </form>
			
<?php include 'footer.php'; ?>