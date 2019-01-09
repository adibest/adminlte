<?php
$server = "localhost";
$user 	= "root";
$pass	= "123";
$db		= "pondok";

$konek = mysqli_connect($server, $user, $pass, $db);
if (!$konek) {
	die('koneksi gagal'. mysqli_connect_error());
}

// die menghentikan semua proses echo dkk setelahnya, setelah sebelumnya mengeprint pesannya
// The die() function prints a message and exits the current script.

?>