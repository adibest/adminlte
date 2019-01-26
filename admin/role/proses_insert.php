<?php
session_start();
if (isset($_SESSION['email'])) {
	include '../../config/koneksi.php';
	$name = $_POST['nama'];

	$sql1 = "INSERT INTO role (nama) VALUES ('$name')";
	mysqli_query($konek,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>