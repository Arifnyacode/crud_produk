<?php 
session_start();
$status = $_SESSION['as'];
$judul = "kategori"; 
include 'navbar.php'; 
include '../controller/kategori.php';
 
if (!isset($_SESSION['username'])) {
    header("Location: formlogin.php");
}
?>
<h3>Daftar kategori</h3>
<a href="form_kategori.php">Tambah Kategori</a>
          <br><br>

          <table width="60%" border="1">
            <tr>
              <th>No</th>
              <th>Nama kategori</th>
              <th>Nama Merk</th>
              <th>Aksi</th>
            </tr>
            <?php 
            if (!empty($data)) :
            $no=1;
            foreach($data as $m):
                ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $m['nama_kategori']; ?></td>
              <td><?php echo $m['nama_merk']; ?></td>
              <td><a href="formedit_kategori.php?id=<?php echo $m['Id_kategori'] ?> "><button type="button" value="hapus" onclick="return confirm('are you sure to change this data?')">edit</button></a> <a href="../Controller/hapuskategori.php?id=<?php echo $m['Id_kategori'] ?>"><button type="button" onclick="return confirm('are you sure to delete this data?')">hapus</button></a></td>
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