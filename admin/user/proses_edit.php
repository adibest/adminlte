<?php
session_start();
if (isset($_SESSION['email'])) {
	include '../../config/koneksi.php';
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$email	= $_POST['email'];
	$pass	= md5($_POST['password']);
 	$nama_gambar 	= $_FILES['gambar']['name'];
 	$tmp_name	= $_FILES['gambar']['tmp_name'];

 	$acak = mt_rand(10000,99999);
 	$image_name = $acak."-".$nama_gambar;//nama di database

 	$sql4 = "SELECT * FROM user WHERE id ='$id'";
 	$hasil = mysqli_query($konek, $sql4);
	$data = mysqli_fetch_assoc($hasil);
	$path = "../../gambar_user/";
	
	unlink($path.$data['foto']);

	move_uploaded_file($tmp_name, "../../gambar_user/".$image_name);//pake fungsi rand

	$sql1 = "UPDATE user SET name ='$nama', email = '$email', password = '$pass', foto = '$image_name' WHERE id='$id'";
	mysqli_query($konek,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>
<!-- tambahkan cabang password, kan dikosongi? dan begitulah-->