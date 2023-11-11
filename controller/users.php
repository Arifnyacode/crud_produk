<?php 
include 'koneksidb.php';

$sql = "SELECT * FROM user";
$data_user = mysqli_query($connect,$sql);

 ?>