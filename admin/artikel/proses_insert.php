<?php
session_start();
if (isset($_SESSION['email'])) {
	include '../../config/koneksi.php';
	$judul = $_POST['judul'];
	$isi	= $_POST['isi'];
	$author	= $_POST['author'];
	$gambar	= $_POST['gambar'];
	$status	= $_POST['status'];
	$kat	= $_POST['kategori'];
	$rilis	= $_POST['rilis'];

	$sql1 = "INSERT INTO article (judul,isi,user_id,gambar,status,kategori_id,rilis) VALUES ('$judul','$isi','$author','$gambar','$status','$kat','$rilis')";
	mysqli_query($konek,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>