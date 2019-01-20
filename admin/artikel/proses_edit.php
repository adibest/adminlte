<?php
session_start();
if (isset($_SESSION['email'])) {
	include '../../config/koneksi.php';
	$id = $_POST['id'];
	$judul = $_POST['judul'];
	$isi	= $_POST['isi'];
	$author	= $_POST['author'];
//	$user 	= $_SESSION['id'];
	// $gambar	= $_POST['gambar'];
 	$nama_gambar 	= $_FILES['gambar']['name'];
 	$tmp_name	= $_FILES['gambar']['tmp_name'];

 	$acak = mt_rand(10000,99999);
 	$image_name = $acak."-".$nama_gambar;//nama di database

	$status	= $_POST['status'];
	$kat	= $_POST['kategori'];
	// $rilis	= $_POST['rilis'];
	$rilis 	= date('Y-m-d');

	$sql4 = "SELECT * FROM article WHERE id ='$id'";
 	$hasil = mysqli_query($konek, $sql4);
	$data = mysqli_fetch_assoc($hasil);
	$path = "../../gambar/";
	
	unlink($path.$data['gambar']);

	move_uploaded_file($tmp_name, "../../gambar/".$image_name);//pake fungsi rand

	$sql1 = "UPDATE article SET judul = '$judul', isi = '$isi', user_id = '$author', gambar = '$image_name', status = '$status', kategori_id = '$kat', rilis = '$rilis' WHERE id='$id'";//untuk rilis bisa pake date
	mysqli_query($konek,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>