<?php
session_start();
if (isset($_SESSION['email'])) {
	include '../../config/koneksi.php';
	$name = $_POST['namakat'];
	$userr = $_SESSION['id'];

	$sql1 = "INSERT INTO kategori (nama,user_id) VALUES ('$name','$userr')";
	mysqli_query($konek,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>