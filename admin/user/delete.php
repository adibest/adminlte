<?php 
	include '../../config/koneksi.php';
	$id = $_GET['id'];
	$sql4 = "SELECT * FROM user WHERE id ='$id'";
	$sql5 = "DELETE FROM user WHERE id='$id'";
	$hasil = mysqli_query($konek, $sql4);
	$data = mysqli_fetch_assoc($hasil);
	$path = "../../gambar_user/";
	
	unlink($path.$data['foto']);

	mysqli_query($konek, $sql5); 
	header("location:index.php");

 ?>