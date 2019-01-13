<?php
session_start();
if (isset($_SESSION['email'])) {
	include '../../config/koneksi.php';
	$id = $_POST['id'];
	$judul = $_POST['judul'];
	$isi	= $_POST['isi'];
	$author	= $_POST['author'];
	$gambar	= $_POST['gambar'];
	$status	= $_POST['status'];
	$kat	= $_POST['kategori'];
	$rilis	= $_POST['rilis'];

	$sql1 = "UPDATE article SET judul = '$judul', isi = '$isi', user_id = '$author', gambar = '$gambar', status = '$status',kategori_id = '$kat', rilis = '$rilis' WHERE id='$id'";
	mysqli_query($konek,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>