<?php 
session_start();
$status = $_SESSION['as'];
$judul = "List Merk"; 
include 'navbar.php'; 
include '../controller/merk.php';
 
if (!isset($_SESSION['username'])) {
    header("Location: formlogin.php");
}
?>
<h3 align="center">Data Merk</h3>
         <p align="center">
          <a href="form_merk.php"><button>Tambah Merk</button></a>
          <br><br>
          </p>

          <table border="1" width="30%" align="center">
            <tr>
              <th width="50">No</th>
              <th width="120">Nama Merk</th>
              <th colspan="2">Aksi</th>
            </tr>
            <?php 
            if (!empty($data)) :
            $no=1;
            foreach($data as $m):
              $warna=($no%2==1)?"white":"#eee";
                ?>
            <tr bgcolor="<?php echo $warna; ?>">
              <td align="center"><?php echo $no++; ?></td>
              <td align="center"><?php echo $m['nama_merk']; ?></td>
              <td align="center"><a href="formedit_merk.php?id=<?php echo $m['Id_merk'] ?> "><button type="button" onclick="return confirm('are you sure to change this data?')">edit</button></a> </td>
              <td align="center"><a href="../Controller/hapusmerk.php?id=<?php echo $m['Id_merk'] ?>"><button type="button" onclick="return confirm('are you sure to delete this data?')">hapus</button></a></td>
            </tr>
            <?php 
          endforeach;
        else:
             ?>
             <tr>
                <td colspan="3">
                    Empty Data
                    </td>
                 </tr>
               <?php endif; ?>
          </table>
			
<?php include 'footer.php'; ?>