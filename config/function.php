<?php
// include 'koneksi.php';
// function penulis($id)
// {
	// global $konek;
	// $sql = "SELECT * FROM user WHERE id = '$id'";
	// $result = mysqli_query($konek, $sql);
	// $row = mysqli_fetch_assoc($result)
	// return $row['name'];
// }

// function kategori($id)
// {
	// global $konek;
	// $sql = "SELECT * FROM kategori WHERE id = '$id'";
	// $result = mysqli_query($konek, $sql);
	// $row = mysqli_fetch_assoc($result)
	// return $row['nama'];
// }
function status($stat) {
  if ($stat == "1") {
    return "<em class='btn btn-primary btn-xs'>Edited</em>";
  } else {
    return "<em class='btn btn-danger btn-xs'>Draft</em>";
  }
}


?>