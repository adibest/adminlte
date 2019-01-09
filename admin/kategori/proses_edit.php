<?php
session_start();
if (isset($_SESSION['email'])) {
	include '../../config/koneksi.php';
	$id		= $_POST['id'];
	$name = $_POST['namakat'];

	$sql3 = "UPDATE kategori SET nama = '$name' WHERE id='$id'";
	mysqli_query($konek,$sql3);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>