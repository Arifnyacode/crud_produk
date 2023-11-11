<?php 
include 'koneksidb.php';

$id = $_GET['id'];

$sql = "DELETE FROM `merk` WHERE Id_merk=$id";
$data = mysqli_query($connect, $sql);
header("Location: ../view/view_merk.php");
 ?>