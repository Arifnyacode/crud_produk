<!DOCTYPE html>
<html>
<head>
<title><?php echo $judul; ?> </title>
<link rel="stylesheet" href="../asset/css/template.css">
</head>
<body>

<ul>
  <li><a class="active" href="dashboard.php">Home</a></li>
  <?php if ($status==2): ?>
  	<li><a href="view_user.php">User</a></li>
  	<li><a href="view_merk.php">Merk</a></li>
  	<li><a href="view_kategori.php">Kategori</a></li>
  <?php endif ?>
  	<?php if ($status==2 || $status==3): ?>
  		<li><a href="view_produk.php">Produk</a></li>
  		<li><a href="view_transaksi.php">transaksi</a></li>
  	<?php endif ?>
  	
  	<?php if ($status==1 || $status==2): ?>
  		<li><a href="report.php">Laporan</a></li>
  	<?php endif ?>
  
  
  <li><a href="../controller/logout.php">Log Out</a></li>
</ul>
<section>
