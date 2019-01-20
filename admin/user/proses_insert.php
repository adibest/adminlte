<?php
session_start();
if (isset($_SESSION['email'])) {
	include '../../config/koneksi.php';
	$nama = $_POST['nama'];
	$email	= $_POST['email'];
	$pass	= $_POST['password'];
 	$nama_gambar = $_FILES['gambar']['name'];
 	$tmp_name	= $_FILES['gambar']['tmp_name'];//nama sementara?nama server?

 	$acak = mt_rand(10000,99999);
 	$image_name = $acak."-".$nama_gambar;//nama di database

	move_uploaded_file($tmp_name, "../../gambar_user/".$image_name);//pake fungsi rand

	$sql1 = "INSERT INTO user (name,email,password,foto) VALUES ('$nama','$email','$pass','$image_name')";//untuk rilis bisa pake date
	mysqli_query($konek,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>