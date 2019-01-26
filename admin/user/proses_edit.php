<?php
session_start();
if (isset($_SESSION['email'])) {
	include '../../config/koneksi.php';
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$roladee = $_POST['roled'];
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
	
	if ($nama_gambar!='') {
		unlink($path.$data['foto']);
	} else {
		echo "semoga foto gak kehapus";
	}
	

	move_uploaded_file($tmp_name, "../../gambar_user/".$image_name);//pake fungsi rand

	$sql1 = "UPDATE user SET name ='$nama', role_id = '$roladee',email = '$email', password = '$pass', foto = '$image_name' WHERE id='$id'";//passwor dan foto diganti
	$sql2 = "UPDATE user SET name ='$nama', role_id = '$roladee',email = '$email', foto = '$image_name' WHERE id='$id'";//foto diganti pasword kagak
	$sql3 = "UPDATE user SET name ='$nama', role_id = '$roladee',email = '$email', password = '$pass' WHERE id='$id'";//paswod ganti foto kagak
	$sql5 = "UPDATE user SET name ='$nama', role_id = '$roladee',email = '$email' WHERE id='$id'";//paswod dan foto gak diganti

	if (($pass = '') AND ($nama_gambar = '')) {
		mysqli_query($konek,$sql5);
	} elseif ($pass = '') {
		mysqli_query($konek,$sql2);
	} elseif ($nama_gambar = '') {
		mysqli_query($konek,$sql3);
	} else {
		mysqli_query($konek,$sql1);
	}
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>
<!-- tambahkan cabang password, kan dikosongi? dan begitulah-->