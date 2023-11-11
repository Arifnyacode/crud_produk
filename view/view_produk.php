<?php 
session_start();
$status = $_SESSION['as'];
$judul = "Daftar Produk"; 
include 'navbar.php';
include '../controller/getAll.php'; 
 
if (!isset($_SESSION['username'])) {
    header("Location: formlogin.php");
}
?>
<h3>Daftar Produk</h3>
	<a href="form_produk.php"><button>Tambah produk</button></a>
          <br><br>

          <table width="80%" border="1">
            <tr>
              <th>No</th>
              <th>Nama Produk</th>
              <th>Nama kategori</th>
              <th>Nama Merk</th>
              <th>jumlah</th>
              <th>tanggal produk</th>
              <th>Harga</th>
              <th>Aksi</th>
            </tr>
            <?php 
            if (!empty($data_produk)) :
            $no=1;
            foreach($data_produk as $p):
                ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $p['nama_produk']; ?></td>
              <td><?php echo $p['nama_kategori']; ?></td>
              <td><?php echo $p['nama_merk']; ?></td>
              <td><?php echo $p['jumlah_produk']?></td>
              <td><?php echo $p['tgl_masuk']?></td>
              <td><?php echo "Rp. ".number_format($p['harga'],0,',','.'); ?></td>
              <td><a href="formedit_produk.php?id=<?php echo $p['Id_produk'] ?> "><button type="button" onclick="return confirm('are you sure to change this data?')">edit</button></a> <a href="../Controller/hapusproduk.php?id=<?php echo $p['Id_produk'] ?>"><button type="button" onclick="return confirm('are you sure to delete this data?')">hapus</button></a></td>

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