<?php
session_start();
if (isset($_SESSION['email'])) {
	include '../../config/koneksi.php';
	$judul = $_POST['judul'];
	$isi	= $_POST['isi'];
	$author	= $_POST['author'];
//	$user 	= $_SESSION['id'];
	// $gambar	= $_POST['gambar'];
 	$nama_gambar 	= $_FILES['gambar']['name'];
 	$tmp_name	= $_FILES['gambar']['tmp_name'];

	$status	= $_POST['status'];
	$kat	= $_POST['kategori'];
	// $rilis	= $_POST['rilis'];
	$rilis 	= date('Y-m-d');

	move_uploaded_file($tmp_name, "../../gambar/".$nama_gambar);//pake fungsi rand

	$sql1 = "INSERT INTO article (judul,isi,user_id,gambar,status,kategori_id,rilis) VALUES ('$judul','$isi','$author','$nama_gambar','$status','$kat','$rilis')";//untuk rilis bisa pake date
	mysqli_query($konek,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>