<?php 
	include '../../config/koneksi.php';
	$id = $_GET['id'];
	$sql4 = "SELECT * FROM article WHERE id ='$id'";
	$sql5 = "DELETE FROM article WHERE id='$id'";
	$hasil = mysqli_query($konek, $sql4);
	$data = mysqli_fetch_assoc($hasil);
	$path = "../../gambar/";
	
	unlink($path.$data['gambar']);

	mysqli_query($konek, $sql5); 
	header("location:index.php");

 ?>