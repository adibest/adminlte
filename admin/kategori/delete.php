<?php
include '../../config/koneksi.php';
$id	= $_GET['id'];

$sql4 = "DELETE FROM kategori WHERE id = '$id'";
mysqli_query($konek,$sql4);
header('location:index.php');
?>