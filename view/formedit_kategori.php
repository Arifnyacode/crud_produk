<?php 
session_start();
$status = $_SESSION['as'];
$judul = "Ubah Kategori"; 
include 'navbar.php'; 
include '../controller/koneksidb.php';
 
if (!isset($_SESSION['username'])) {
    header("Location: formlogin.php");
}
$id = $_GET['id'];

$sql = "SELECT * FROM merk";
$dat = mysqli_query($connect, $sql);

$query = "SELECT * FROM `kategori` JOIN merk ON kategori.Id_merk=merk.Id_merk WHERE kategori.Id_kategori=$id";
$dataa = mysqli_query($connect, $query);
while ($dt = mysqli_fetch_array($dataa)) {
  $idmerk = $dt['Id_merk'];
  $namaa = $dt['nama_kategori'];
}
?>
<a href="view_kategori.php">Go to Home</a>
    <br/><br/>
 
    <form action="../Controller/editkategori.php" method="post">
        <table width="25%" border="0">
            <tr>
              <td>Nama Merk</td>
              <td><select name="Id_merk" id="">
                <option value="0">Pilih merk</option>
                <?php 
                if(!empty($dat)):
                  foreach($dat as $d):
                    if($idmerk==$d['Id_merk']){
                      $sel = "selected";
                    }else{
                      $sel ="";
                    }

                 ?>
                 <option value="<?php echo $d['Id_merk']; ?>" size='20' <?php echo $sel; ?>> <?php echo $d['nama_merk']; ?></option>
               <?php 
             
             endforeach; 
             endif;
             ?>
              </select>
              </td>
            </tr>
            <tr> 
                <td>Nama kategori</td>
                <td><input type="text" name="nama_kategori" value="<?php echo $namaa ?>"></td>
            </tr>
           
            <tr> 
                <td><input type="hidden" name="idkategori" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="edit" value="Update"></td>
            </tr>
        </table>
    </form>
			
<?php include 'footer.php'; ?>