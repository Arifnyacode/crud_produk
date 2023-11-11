<?php 
session_start();
$status = $_SESSION['as'];
$judul = "Report"; 

include 'navbar.php'; 

 
if (!isset($_SESSION['username'])) {
    header("Location: formlogin.php");
}
?>
<h3 align="center">Laporan Semua Data</h3>
<table width="30%" border="2" align="center">
	<tr>
		<th>Keterangan Data</th>
		<th>Aksi</th>
	</tr>
	<tr>
		<td>Merk</td>
		<td align="center"><a href="../controller/cetak_merk.php"><button>Print</button></a></td>
	</tr>
	<tr>
		<td>Kategori</td>
		<td align="center"><a href="../controller/cetak_kategori.php"><button>Print</button></a></td>
	</tr>
	<tr>
		<td>Produk</td>
		<td align="center"><a href="../controller/cetak_produk.php"><button>Print</button></a></td>
	</tr>
	<tr>
		<td>Transaksi</td>
		<td align="center"><a href="..controller/print.php"><button>Print</button></a></td>
	</tr>
</table>
			
<?php include 'footer.php'; ?>