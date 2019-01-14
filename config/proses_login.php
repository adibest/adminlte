<?php
session_start();
include 'koneksi.php';
$email		= $_POST['email'];
$pass		= $_POST['password'];
if(!empty($email) && !empty($pass)) {
	$sql		= "SELECT * FROM user WHERE email = '$email' AND password = '$pass'";
	$query		= mysqli_query($konek, $sql);
	$row 		= mysqli_fetch_assoc($query);
	if (mysqli_num_rows($query)>0) {
		$_SESSION['id']	= $id;
		$_SESSION['email']	= $email;
		$_SESSION['name']	= $row['name'];
		$_SESSION['photo']	= $row['foto'];
		header('location: ../admin/index.php');
	} else {
		echo "Email anda salah";
	}
} else {
	echo "Email dan password anda kosong";
}
?>