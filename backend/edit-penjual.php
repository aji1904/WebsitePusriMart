<?php
session_start();
$Susername = $_SESSION['user_penjual'];
if (!isset($Susername)) {
	header("location: ../login_penjual.php");
	die();
}else{

require 'koneksi.php'; 
$alamat = $_POST['alamat'];

$query = "UPDATE penjual SET alamat_penjual='$alamat' WHERE user_penjual='$Susername' ";

$update = mysqli_query($koneksi, $query);

if ($update) {
	header("location: ../profile_penjual.php");
	die();
} else {
	echo "gagal";
}

}

?>