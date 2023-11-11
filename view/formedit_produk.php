<?php 
session_start();
$status = $_SESSION['as'];
$judul = "Dashboard"; 
include 'navbar.php';
include '../Controller/getAll.php';
include '../Controller/koneksidb.php';
 
if (!isset($_SESSION['username'])) {
    header("Location: formlogin.php");
}
$id = $_GET['id'];
$sql = "SELECT * FROM produk JOIN merk ON merk.Id_merk=produk.Id_merk JOIN kategori ON kategori.Id_kategori=produk.Id_kategori WHERE Id_produk=$id";
$produk_data = mysqli_query($connect,$sql);
while($datap = mysqli_fetch_array($produk_data)){
  $namapro = $datap['nama_produk'];
  $idm = $datap['Id_merk'];
  $idk = $datap['Id_kategori'];
  $jmlh = $datap['jumlah_produk'];
  $tanggalp = $datap['tgl_masuk'];
  $hrg = $datap['harga']; 
}
?>
<h3>Formulir mengubah produk</h3>
<a href="view_produk.php">Kembali</a>
    <br/><br/>
 
    <form action="../Controller/editproduk.php" method="post">
        <table width="25%" border="0">
          <tr>
            <td><input type="hidden" name="id_produk" value="<?php echo $id ?>"></td>
            <td></td>
          </tr>
            
            <tr> 
                <td>Nama produk</td>
                <td><input type="text" name="nama_produk" value="<?php echo $namapro ?>"></td>
            </tr>
           <tr>
              <td>Nama merk</td>
              <td>
                <select name="id_merk">
                  <option value="">Pilih Merk</option>
                  <?php foreach($data_merk as $m): 
                     if($idm==$m['Id_merk']){
                      $sel = "selected";
                    }else{
                      $sel ="";
                    }
                    ?>
                    <option value="<?php echo $m['Id_merk'] ?>" <?php echo $sel ?> ><?php echo $m['nama_merk']; ?></option>
                  <?php endforeach; ?>
                </select>
              </td>  
           </tr>
           <tr>
             <td>Nama kategori</td>
             <td>
               <select name="id_kategori">
                  <option value="">Pilih kategori</option>
                  <?php foreach($data_kategori as $k): 
                    if($idk==$k['Id_kategori']){
                      $sel = "selected";
                    }else{
                      $sel ="";
                    }
                    ?>
                    <option value="<?php echo $k['Id_kategori'] ?>" <?php echo $sel ?>><?php echo $k['nama_kategori']; ?></option>
                  <?php endforeach; ?>
                </select>
             </td>
           </tr>
           <tr>
             <td>Jumlah Produk</td>
             <td><input type="number" name="jumlah" id="jumlah" value="<?php echo $jmlh ?>"></td>
           </tr>
           <tr>
             <td>tanggal masuk produk</td>
             <td><input type="date" name="tgl" id="tgl" value="<?php echo $tanggalp ?>"></td>
           </tr>
           <tr>
             <td>Harganya</td>
             <td><input type="number" name="harga_produk" id="harga" value="<?php echo $hrg ?>"></td>
           </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Ubah"></td>
            </tr>
        </table>
    </form>
			
<?php include 'footer.php'; ?>