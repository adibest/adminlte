<?php
session_start();
if (isset($_SESSION['email'])) {
	include '../../config/koneksi.php';
	$judul = $_POST['judul'];
	$isi	= $_POST['isi'];
	// $author	= $_POST['author'];
	$user 	= $_SESSION['id'];
	// $gambar	= $_POST['gambar'];
 	$nama_gambar 	= $_FILES['gambar']['name'];
 	$tmp_name	= $_FILES['gambar']['tmp_name'];

 	$acak = mt_rand(10000,99999);
 	$image_name = $acak."-".$nama_gambar;//nama di database

	$status	= 0;
	$kat	= $_POST['kategori'];
	// $rilis	= $_POST['rilis'];
	$rilis 	= date('Y-m-d');

	move_uploaded_file($tmp_name, "../../gambar/".$image_name);//pake fungsi rand

	$sql1 = "INSERT INTO article (judul,isi,user_id,gambar,status,kategori_id,rilis) VALUES ('$judul','$isi','$user','$image_name ','$status','$kat','$rilis')";//untuk rilis bisa pake date
	mysqli_query($konek,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>