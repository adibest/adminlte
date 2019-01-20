<?php
session_start();
if (isset($_SESSION['email'])) {
	include '../../config/koneksi.php';
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$email	= $_POST['email'];
	$pass	= $_POST['password'];
 	$nama_gambar 	= $_FILES['gambar']['name'];
 	$tmp_name	= $_FILES['gambar']['tmp_name'];

 	$acak = mt_rand(10000,99999);
 	$image_name = $acak."-".$nama_gambar;//nama di database

	move_uploaded_file($tmp_name, "../../gambar_user/".$image_name);//pake fungsi rand

	$sql1 = "UPDATE user SET name ='$nama', email = '$email', password = '$pass', foto = '$image_name' WHERE id='$id'";
	mysqli_query($konek,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>