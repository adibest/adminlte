<?php
session_start();
include 'koneksi.php';
$email		= $_POST['email'];
$pass		= md5($_POST['password']);
if(!empty($email) && !empty($pass)) {
	$sql		= "SELECT * FROM user WHERE email = '$email' AND password = '$pass'";
	$query		= mysqli_query($konek, $sql);
	$row 		= mysqli_fetch_assoc($query);
	if (mysqli_num_rows($query)>0) {
		$_SESSION['id']	= $row['id'];
		$_SESSION['email']	= $email;
		$_SESSION['name']	= $row['name'];
		$_SESSION['photo']	= "../gambar_user/".$row['foto'];
		$_SESSION['role']	= $row['role_id'];
		
		header('location: ../admin/index.php');
	} else {
		echo "Email anda salah";
	}
} else {
	echo "Email dan password anda kosong";
}
?>